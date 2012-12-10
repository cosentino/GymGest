<?php
App::uses('AppController', 'Controller');
/**
 * Presences Controller
 *
 * @property Presence $Presence
 */
class PresencesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Presence->recursive = 0;
		$this->set('presences', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Presence->id = $id;
		if (!$this->Presence->exists()) {
			throw new NotFoundException(__('Invalid presence'));
		}
		$this->set('presence', $this->Presence->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Presence->create();
			if ($this->Presence->save($this->request->data)) {
				$this->Session->setFlash(__('The presence has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presence could not be saved. Please, try again.'));
			}
		}
		$people = $this->Presence->Person->find('list');

/*
		// regular view code here
		$subscriptions = $this->Presence->Subscription->find('all', array(
			'contain' => array('SubscriptionType')
		));		
		// create a key-value that the FormHelper recognizes
		$subscriptions = Set::combine($subscriptions , '{n}.Subscription.id', '{n}.SubscriptionType.name');

		$this->set(compact('people', 'subscriptions'));
*/
		$this->set(compact('people'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add_to_person() {		

		if ($this->request->is('post')) {
			$this->Presence->create();
			if ($this->Presence->save($this->request->data)) {

				//nel caso in cui si tratti di un abbonamento "prepaid" scalo 1 credito all'utente
				$subscription_type_id = $this->request->data['Presence']['subscription_type'];
				if ($subscription_type_id != -1) {
					$subscription_type = $this->Presence->Person->Subscription->SubscriptionType->read(array(), $subscription_type_id);										
					if ($subscription_type['SubscriptionType']['prepaid']) {


					}
				}



				$this->Session->setFlash(__('The presence has been saved'));

				//$this->redirect(array('action' => 'index'));				

			} else {
				$this->Session->setFlash(__('The presence could not be saved. Please, try again.'));
			}
		} else {
			//$this->request->data = $this->Person->read(null, $id);
		}

		// load the person specified by the named parameter "person_id"
		$par_person_id = $this->request->params['named']['person_id'];
		$person = $this->Presence->Person->read(null, $par_person_id);
		$this->set(compact('person'));

		//seleziono gli abbonamenti validi dell'utente corrente
		$valid_subscription_types = $this->Presence->Person->Subscription->SubscriptionType->find('list', 
			array(
				'joins' => array(
					array(
						'table'=>'subscriptions', 
						'alias' => 'Subscription',
						'type'=>'inner',
						'conditions'=> array('SubscriptionType.id = Subscription.subscription_type_id')
					)
				),
				'conditions' => array(
					'Subscription.person_id' => $par_person_id,
					'Subscription.valid_from <=' => date('Y-m-d'),
					'Subscription.valid_to >=' => date('Y-m-d')
				)
			)
		);

		//
		$valid_subscription_types = $valid_subscription_types 
			+ array(-1 => __('Ingresso Singolo')
		);

		$this->set(compact('valid_subscription_types', 'par_person_id'));

		/*
		$people = $this->Presence->Person->find('all', array(
			'id' => $par_person_id
		));		*/

/*
		// regular view code here
		$subscriptions = $this->Presence->Subscription->find('all', array(
			'contain' => array('SubscriptionType')
		));		
		// create a key-value that the FormHelper recognizes
		$subscriptions = Set::combine($subscriptions , '{n}.Subscription.id', '{n}.SubscriptionType.name');

		$this->set(compact('people', 'subscriptions'));
*/
		//$this->set(compact('people'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Presence->id = $id;
		if (!$this->Presence->exists()) {
			throw new NotFoundException(__('Invalid presence'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Presence->save($this->request->data)) {
				$this->Session->setFlash(__('The presence has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presence could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Presence->read(null, $id);
		}
		$people = $this->Presence->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Presence->id = $id;
		if (!$this->Presence->exists()) {
			throw new NotFoundException(__('Invalid presence'));
		}
		if ($this->Presence->delete()) {
			$this->Session->setFlash(__('Presence deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Presence was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
