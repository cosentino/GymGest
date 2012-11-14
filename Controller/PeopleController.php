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
	public $components = array('Search.Prg');
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
				$this->Session->setFlash(__('The person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		} else {
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
			$this->Session->setFlash(__('Person deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * incrementPrepaidPresences method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function incrementPrepaidPresences($id = null) {
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid Person'));
		}
		
		$person = $this->Person->read(null, $id);
		$ival = intval($person['Person']['prepaid_presences']);
		$ival += 10;
		$person['Person']['prepaid_presences'] = strval($ival);
		
		if ($this->Person->save($person)) {
			$this->Session->setFlash(__('Sono stati aggiunti 10 ingressi prepagati all\'utente "%s %s".', $person['Person']['name'], $person['Person']['surname']));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('Non &egrave; stato possible incrementare gli ingressi prepagati per questo utente.<br>'));
			$this->Session->setFlash(__('Errori di compilazione'), 'errors', array('errors' => $this->Person->validationErrors),'errors'); 
			//echo debug($this->Person->validationErrors);
			$this->redirect(array('action' => 'index'));		
		}	
	}

}
