<?php
App::uses('AppController', 'Controller');
/**
 * Presences Controller
 *
 * @property Presence $Presence
 */
class PresencesController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	            'created',
	            'Person.name, Person.surname' => array('label' => 'Person'),
	            'actions' => array(
	            	'bSortable' => false,
	            	'bSearchable' => false,
	            	'class' => 'actions',
	            	'useField' => null
            	)
	        ),
	    )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->Presence->recursive = 0;
		//$this->set('presences', $this->paginate());
		$this->DataTable->settings['Presence'] = array('fields' => array('id', 'created', 'modified', 'person_id'));
		$this->DataTable->paginate = array('Presence');
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
		//parameters
		$par_person_id = null;
		if (isset($this->request->params['named']['person_id']))
		$par_person_id = $this->request->params['named']['person_id'];
		$this->set(compact('par_person_id'));


		if ($this->request->is('post')) {
			$this->Presence->create();
			if ($this->Presence->save($this->request->data)) {
				$this->Session->setFlash(__('The presence has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presence could not be saved. Please, try again.'),"default",array(),"error");
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
 * Aggiunge una presenza per la persona passata come named parameter.
 * 
 *
 * @return void
 */
	public function add_to_person() {
		//load the person specified by the named parameter "person_id"
		$par_person_id = $this->request->params['named']['person_id'];
		$person = $this->Presence->Person->read(null, $par_person_id);
		$this->set(compact('par_person_id','person'));

		//seleziono gli abbonamenti validi per l'utente corrente
		$valid_subscriptions = $this->Presence->Person->Subscription->find('list', 
			array(
				'fields' => array('Subscription.id','SubscriptionType.name'),
				'joins' => array(
					array(
						'table'=>'subscription_types', 
						'alias' => 'SubscriptionType',
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

		//agli abbonamenti validi aggiungo anche la voce 'Ingresso singolo'
		$valid_subscriptions = $valid_subscriptions 
			+ array(-1 => __('Ingresso Singolo'));

		//CASO: postback
		if ($this->request->is('post')) {

			//creo e salvo un nuovo oggetto Presence con i dati inviati dal form
			$this->Presence->create();
			if ($this->Presence->save($this->request->data)) {

				//nel caso in cui si tratti di un abbonamento "prepaid" scalo 1 credito all'utente
				$subscription_id = $this->request->data['Presence']['subscription_id'];
				if ($subscription_id != -1) {
					$selected_subscription = $this->Presence->Person->Subscription->read(array(), $subscription_id);

					if ($selected_subscription['SubscriptionType']['prepaid']) {
						//decrement the subscription prepaid_count
						$count = --$selected_subscription['Subscription']['prepaid_count'];
						//and save it
						if ($this->Presence->Person->Subscription->save($selected_subscription)) {
							$this->Session->setFlash(__('The presence has been saved. ' . $count . ' entrance left.'),"default",array(),"success");
							$this->redirect(array('controller' => 'People', 'action' => 'index'));
						} else {
							$this->Session->setFlash(__('The presence could not be saved. Please, try again.'),"default",array(),"error");
						}
					}
				}

				$this->Session->setFlash(__('The presence has been saved'),"default",array(),"success");
				$this->redirect(array('controller' => 'People', 'action' => 'index'));				

			} else {
				$this->Session->setFlash(__('The presence could not be saved. Please, try again.'),"default",array(),"error");
			}

		//CASO: non è un postback
		} else {
			//mostro semplicemente il form (add_to_person.ctp)
			//$this->request->data = $this->Person->read(null, $id);
		}

		$this->set(compact('valid_subscriptions', 'par_person_id'));
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
				$this->Session->setFlash(__('The presence has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presence could not be saved. Please, try again.'),"default",array(),"error");
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
			$this->Session->setFlash(__('Presence deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Presence was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
