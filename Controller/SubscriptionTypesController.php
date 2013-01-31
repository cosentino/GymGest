<?php
App::uses('AppController', 'Controller');
/**
 * SubscriptionTypes Controller
 *
 * @property SubscriptionType $SubscriptionType
 */
class SubscriptionTypesController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	        	'created',
	        	'name',
	            'subscription_days',
	            'prepaid',
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
		//$this->SubscriptionType->recursive = 0;
		//$this->set('subscriptionTypes', $this->paginate());
		$this->DataTable->settings['SubscriptionType'] = array('fields' => 
			array('id', 'created', 'name', 'subscription_days', 'prepaid'));
		$this->DataTable->paginate = array('SubscriptionType');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SubscriptionType->id = $id;
		if (!$this->SubscriptionType->exists()) {
			throw new NotFoundException(__('Invalid subscription type'));
		}
		$this->set('subscriptionType', $this->SubscriptionType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubscriptionType->create();
			if ($this->SubscriptionType->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription type has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription type could not be saved. Please, try again.'),"default",array(),"error");
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SubscriptionType->id = $id;
		if (!$this->SubscriptionType->exists()) {
			throw new NotFoundException(__('Invalid subscription type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubscriptionType->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription type has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription type could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
            $this->SubscriptionType->recursive = 2;
			$this->request->data = $this->SubscriptionType->read(null, $id);
		}
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
		$this->SubscriptionType->id = $id;
		if (!$this->SubscriptionType->exists()) {
			throw new NotFoundException(__('Invalid subscription type'));
		}
		if ($this->SubscriptionType->delete()) {
			$this->Session->setFlash(__('Subscription type deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subscription type was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
