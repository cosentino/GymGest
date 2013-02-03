<?php
App::uses('AppController', 'Controller');
/**
 * Courses Controller
 *
 * @property Course $Course
 */
class CoursesController extends AppController {

	public $components = array(
	        'DataTable.DataTable' => array(
	        'columns' => array(
	        	'id',	        	
	            'created',
	            'CourseType.name' => array('label' => 'Course Type'),
	            'start_date',
	            'end_date',
	            'time_slot',
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
		//$this->Course->recursive = 0;
		//$this->set('courses', $this->paginate());
		$this->DataTable->settings['Course'] = array('fields' => array('id', 'created', 'course_type_id', 'start_date', 'end_date', 'time_slot'));
		$this->DataTable->paginate = array('Course');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		$this->set('course', $this->Course->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Course->create();
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'),"default",array(),"error");
			}
		}
		$courseTypes = $this->Course->CourseType->find('list');
		$this->set(compact('courseTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'),"default",array(),"success");
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'),"default",array(),"error");
			}
		} else {
			$this->request->data = $this->Course->read(null, $id);
		}
        $this->Course->recursive = 3;
		$courseTypes = $this->Course->CourseType->find('list');
		$this->set(compact('courseTypes'));
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
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->Course->delete()) {
			$this->Session->setFlash(__('Course deleted'),"default",array(),"success");
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course was not deleted'),"default",array(),"error");
		$this->redirect(array('action' => 'index'));
	}
}
