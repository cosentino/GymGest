<?php
App::uses('AppController', 'Controller');
/**
 * MembershipTypes Controller
 *
 * @property MembershipType $MembershipType
 */
class MembershipTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MembershipType->recursive = 0;
		$this->set('membershipTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MembershipType->id = $id;
		if (!$this->MembershipType->exists()) {
			throw new NotFoundException(__('Invalid membership type'));
		}
		$this->set('membershipType', $this->MembershipType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MembershipType->create();
			if ($this->MembershipType->save($this->request->data)) {
				$this->Session->setFlash(__('The membership type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membership type could not be saved. Please, try again.'));
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
		$this->MembershipType->id = $id;
		if (!$this->MembershipType->exists()) {
			throw new NotFoundException(__('Invalid membership type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MembershipType->save($this->request->data)) {
				$this->Session->setFlash(__('The membership type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membership type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MembershipType->read(null, $id);
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
		$this->MembershipType->id = $id;
		if (!$this->MembershipType->exists()) {
			throw new NotFoundException(__('Invalid membership type'));
		}
		if ($this->MembershipType->delete()) {
			$this->Session->setFlash(__('Membership type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Membership type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
