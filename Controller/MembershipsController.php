<?php
App::uses('AppController', 'Controller');
/**
 * Memberships Controller
 *
 * @property Membership $Membership
 */
class MembershipsController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	        	'created',
	            'Person.name' => array('label' => 'Person'),
	            'MembershipType.name' => array('label' => 'MembershipType'),
	            'valid_from',
	            'valid_to',	            
	            'id_number' => array('label' => 'Id Number'),
	            'association',
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
		//$this->Membership->recursive = 0;
		//$this->set('memberships', $this->paginate());
		$this->DataTable->settings['Membership'] = array('fields' => 
			array('id', 'created', 'person_id', 'membership_type_id', 'valid_from', 'valid_to', 'id_number', 'association'));	            
		$this->DataTable->paginate = array('Membership');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Membership->id = $id;
		if (!$this->Membership->exists()) {
			throw new NotFoundException(__('Invalid membership'));
		}
		$this->set('membership', $this->Membership->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Membership->create();
			if ($this->Membership->save($this->request->data)) {
				$this->Session->setFlash(__('The membership has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membership could not be saved. Please, try again.'),"default",array(),"error");
			}
		}
		$people = $this->Membership->Person->find('list');
		$membershipTypes = $this->Membership->MembershipType->find('list');
		$this->set(compact('people', 'membershipTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Membership->id = $id;
		if (!$this->Membership->exists()) {
			throw new NotFoundException(__('Invalid membership'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Membership->save($this->request->data)) {
				$this->Session->setFlash(__('The membership has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The membership could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
			$this->request->data = $this->Membership->read(null, $id);
		}
		$people = $this->Membership->Person->find('list');
		$membershipTypes = $this->Membership->MembershipType->find('list');
		$this->set(compact('people', 'membershipTypes'));
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
		$this->Membership->id = $id;
		if (!$this->Membership->exists()) {
			throw new NotFoundException(__('Invalid membership'));
		}
		if ($this->Membership->delete()) {
			$this->Session->setFlash(__('Membership deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Membership was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
