<?php
App::uses('AppController', 'Controller');
/**
 * CourseTypes Controller
 *
 * @property CourseType $CourseType
 */
class CourseTypesController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	        	'id',
	            'created',
	            'name',
	            'notes',
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
		//$this->CourseType->recursive = 0;
		//$this->set('courseTypes', $this->paginate());
		$this->DataTable->settings['CourseType'] = array('fields' => array('id', 'created', 'name', 'notes'));
		$this->DataTable->paginate = array('CourseType');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CourseType->id = $id;
		if (!$this->CourseType->exists()) {
			throw new NotFoundException(__('Invalid course type'));
		}
		$this->set('courseType', $this->CourseType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CourseType->create();
			if ($this->CourseType->save($this->request->data)) {
				$this->Session->setFlash(__('The course type has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course type could not be saved. Please, try again.'),"default",array(),"error");
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
		$this->CourseType->id = $id;
		if (!$this->CourseType->exists()) {
			throw new NotFoundException(__('Invalid course type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseType->save($this->request->data)) {
				$this->Session->setFlash(__('The course type has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course type could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
			$this->request->data = $this->CourseType->read(null, $id);
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
		$this->CourseType->id = $id;
		if (!$this->CourseType->exists()) {
			throw new NotFoundException(__('Invalid course type'));
		}
		if ($this->CourseType->delete()) {
			$this->Session->setFlash(__('Course type deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course type was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
