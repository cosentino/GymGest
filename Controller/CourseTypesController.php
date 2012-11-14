<?php
App::uses('AppController', 'Controller');
/**
 * CourseTypes Controller
 *
 * @property CourseType $CourseType
 */
class CourseTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CourseType->recursive = 0;
		$this->set('courseTypes', $this->paginate());
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
				$this->Session->setFlash(__('The course type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course type could not be saved. Please, try again.'));
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
				$this->Session->setFlash(__('The course type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course type could not be saved. Please, try again.'));
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
			$this->Session->setFlash(__('Course type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
