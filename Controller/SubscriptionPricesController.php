<?php
App::uses('AppController', 'Controller');
/**
 * SubscriptionPrices Controller
 *
 * @property SubscriptionPrice $SubscriptionPrice
 */
class SubscriptionPricesController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	            'created',
	            'MembershipType.name' => array('label' => 'Membership Type'),
	            'SubscriptionType.name' => array('label' => 'Subscription Type'),
	            'price',
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
		//$this->SubscriptionPrice->recursive = 0;
		//$this->set('subscriptionPrices', $this->paginate());	
		$this->DataTable->settings['SubscriptionPrice'] = array('fields' => array('id', 'created', 'membership_type_id', 'subscription_type_id', 'price'));
		$this->DataTable->paginate = array('SubscriptionPrice');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SubscriptionPrice->id = $id;
		if (!$this->SubscriptionPrice->exists()) {
			throw new NotFoundException(__('Invalid subscription price'));
		}
		$this->set('subscriptionPrice', $this->SubscriptionPrice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubscriptionPrice->create();
			if ($this->SubscriptionPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription price has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription price could not be saved. Please, try again.'),"default",array(),"error");
			}
		}
		$membershipTypes = $this->SubscriptionPrice->MembershipType->find('list');
		$subscriptionTypes = $this->SubscriptionPrice->SubscriptionType->find('list');
		$this->set(compact('membershipTypes', 'subscriptionTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SubscriptionPrice->id = $id;
		if (!$this->SubscriptionPrice->exists()) {
			throw new NotFoundException(__('Invalid subscription price'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubscriptionPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription price has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription price could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
			$this->request->data = $this->SubscriptionPrice->read(null, $id);
		}
		$membershipTypes = $this->SubscriptionPrice->MembershipType->find('list');
		$subscriptionTypes = $this->SubscriptionPrice->SubscriptionType->find('list');
		$this->set(compact('membershipTypes', 'subscriptionTypes'));
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
		$this->SubscriptionPrice->id = $id;
		if (!$this->SubscriptionPrice->exists()) {
			throw new NotFoundException(__('Invalid subscription price'));
		}
		if ($this->SubscriptionPrice->delete()) {
			$this->Session->setFlash(__('Subscription price deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subscription price was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
