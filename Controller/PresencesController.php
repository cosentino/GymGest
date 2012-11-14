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

		// regular view code here
		$subscriptions = $this->Presence->Subscription->find('all', array(
			'contain' => array('SubscriptionType')
		));
		// create a key-value that the FormHelper recognizes
		$subscriptions = Set::combine($subscriptions , '{n}.Subscription.id', '{n}.SubscriptionType.name');

		$this->set(compact('people', 'subscriptions'));
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
		$subscriptions = $this->Presence->Subscription->find('list');
		$this->set(compact('people', 'subscriptions'));
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
