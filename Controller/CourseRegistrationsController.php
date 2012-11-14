<?php
App::uses('AppController', 'Controller');
/**
 * CourseRegistrations Controller
 *
 * @property CourseRegistration $CourseRegistration
 */
class CourseRegistrationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CourseRegistration->recursive = 0;
		$this->set('courseRegistrations', $this->paginate());
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
				$this->Session->setFlash(__('The course registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course registration could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The course registration has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course registration could not be saved. Please, try again.'));
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
			$this->Session->setFlash(__('Course registration deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course registration was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}