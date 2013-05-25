<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 */
class PeopleController extends AppController {

/*
 *	Searchable implementation
 */	
	public $components = array(
		'Search.Prg',
    	'DataTable.DataTable' => array(
	        'columns' => array(
	        	'created',
	            'Person.name, Person.surname' => array('label' => 'Person'),
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
	        )
	    )
	);
	public $paginate = array();
    public $presetVars = true; // using the model configuration

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prg->commonProcess();
        $this->paginate['conditions'] = $this->Person->parseCriteria($this->passedArgs);
		$this->set('people', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->set('person', $this->Person->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.','default',array(),"error"));
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
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
            $this->Person->recursive = 2;
			$this->request->data = $this->Person->read(null, $id);
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
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('Person deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Person was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
	
}
