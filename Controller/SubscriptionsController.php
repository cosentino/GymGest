<?php
App::uses('AppController', 'Controller');
/**
 * Subscriptions Controller
 *
 * @property Subscription $Subscription
 */
class SubscriptionsController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	        	'created',
	            'Person.name' => array('label' => 'Person'),
	            'SubscriptionType.name' => array('label' => 'SubscriptionType'),
	            'prepaid_count' => array('label' => 'Prepaid'),
	            'valid_from',
	            'valid_to',
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
		//$this->Subscription->recursive = 0;
		//$this->set('subscriptions', $this->paginate());
		$this->DataTable->settings['Subscription'] = array('fields' => 
			array('id', 'created', 'person_id', 'subscription_type_id', 'prepaid_count', 'valid_from', 'valid_to'));
		$this->DataTable->paginate = array('Subscription');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		$this->set('subscription', $this->Subscription->read(null, $id));
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
		
		$valid_subscriptions = $this->getValidSubscriptions($par_person_id);
		if ($valid_subscriptions) {
			$valid_subscription = current($valid_subscriptions);

			$message = 'Attenzione: l\'utente "%s %s" possiede gi&agrave; un abbonamento "%s" in corso,<br /> valido dal %s al %s.';										
			$this->Session->setFlash(sprintf($message,
				$valid_subscription['Person']['name'],
				$valid_subscription['Person']['surname'], 				
				$valid_subscription['SubscriptionType']['name'],
				$valid_subscription['Subscription']['valid_from'], 
				$valid_subscription['Subscription']['valid_to']
			),"default",array(),"warning");
		}
		
		//$this->Session->setFlash('Avviso');

		if ($this->request->is('post')) {
			$this->Subscription->create();
			if ($this->Subscription->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.'),"default",array(),"error");
			}
		}		
		$people = $this->Subscription->Person->find('list');
		$subscriptionTypes = $this->Subscription->SubscriptionType->find('list');
		$this->set(compact('people', 'subscriptionTypes', 'valid_subscription'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subscription->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
			$this->request->data = $this->Subscription->read(null, $id);
		}
		$people = $this->Subscription->Person->find('list');
		$subscriptionTypes = $this->Subscription->SubscriptionType->find('list');
		$this->set(compact('people', 'subscriptionTypes'));
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
		$this->Subscription->id = $id;
		if (!$this->Subscription->exists()) {
			throw new NotFoundException(__('Invalid subscription'));
		}
		if ($this->Subscription->delete()) {
			$this->Session->setFlash(__('Subscription deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subscription was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}

	
/*
*	Cerca gli abbonamenti valido per l'utente indicato.
*	Se non è stato possibile trovare alcun abbonamento valido restituisce false.
*/
	public function getValidSubscriptions($person_id = null) {
		$retval = false;
		
		if ($person_id != null) {
			$retval = $this->Subscription->find('all', 
				array('conditions' => array(
					'Subscription.person_id' => $person_id,
					'Subscription.valid_from <=' => date('Y-m-d'),
					'Subscription.valid_to >=' => date('Y-m-d'),
					'OR' => array(
						'SubscriptionType.prepaid' => false,
						'AND' => array(
							'SubscriptionType.prepaid' => true,
							'Subscription.prepaid_count >' => 0
						)
					)
				))
			);
		}
		
		return $retval;
	}

	
	


}
