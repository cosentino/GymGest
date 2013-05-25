<?php
App::uses('AppController', 'Controller');
/**
 * CourseRegistrations Controller
 *
 * @property CourseRegistration $CourseRegistration
 */
class CourseRegistrationsController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	            'created',
	            'modified',
	            'Person.name, Person.surname' => array('label' => 'Person'),
	            'Course.start_date' => array('label' => 'Course'),
	            'paid',
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
		//$this->CourseRegistration->recursive = 0;
		//$this->set('courseRegistrations', $this->paginate());
		$this->DataTable->settings['CourseRegistration'] = array('fields' => array('created', 'modified', 'person_id', 'course_id', 'paid'));
		$this->DataTable->paginate = array('CourseRegistration');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CourseRegistration->id = $id;
		if (!$this->CourseRegistration->exists()) {
			throw new NotFoundException(__('Invalid course registration'));
		}
		$this->set('courseRegistration', $this->CourseRegistration->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CourseRegistration->create();
			if ($this->CourseRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The course registration has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course registration could not be saved. Please, try again.'),"default",array(),"error");
			}
		}
		$courses = $this->CourseRegistration->Course->find('list');
		$people = $this->CourseRegistration->Person->find('list');
		$this->set(compact('courses', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CourseRegistration->id = $id;
		if (!$this->CourseRegistration->exists()) {
			throw new NotFoundException(__('Invalid course registration'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseRegistration->save($this->request->data)) {
				$this->Session->setFlash(__('The course registration has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course registration could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
			$this->request->data = $this->CourseRegistration->read(null, $id);
		}
		$courses = $this->CourseRegistration->Course->find('list');
		$people = $this->CourseRegistration->Person->find('list');
		$this->set(compact('courses', 'people'));
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
		$this->CourseRegistration->id = $id;
		if (!$this->CourseRegistration->exists()) {
			throw new NotFoundException(__('Invalid course registration'));
		}
		if ($this->CourseRegistration->delete()) {
			$this->Session->setFlash(__('Course registration deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course registration was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
