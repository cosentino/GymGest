<?php
App::uses('AppController', 'Controller');
/**
 * SubscriptionTypes Controller
 *
 * @property SubscriptionType $SubscriptionType
 */
class SubscriptionTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubscriptionType->recursive = 0;
		$this->set('subscriptionTypes', $this->paginate());
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
				$this->Session->setFlash(__('The subscription type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription type could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The subscription type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription type could not be saved. Please, try again.'));
			}
		} else {
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
			$this->Session->setFlash(__('Subscription type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subscription type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
