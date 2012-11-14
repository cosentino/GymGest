<?php
App::uses('AppController', 'Controller');
/**
 * CoursePrices Controller
 *
 * @property CoursePrice $CoursePrice
 */
class CoursePricesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoursePrice->recursive = 0;
		$this->set('coursePrices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoursePrice->id = $id;
		if (!$this->CoursePrice->exists()) {
			throw new NotFoundException(__('Invalid course price'));
		}
		$this->set('coursePrice', $this->CoursePrice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursePrice->create();
			if ($this->CoursePrice->save($this->request->data)) {
				$this->Session->setFlash(__('The course price has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course price could not be saved. Please, try again.'));
			}
		}
		$membershipTypes = $this->CoursePrice->MembershipType->find('list');
		$courseTypes = $this->CoursePrice->CourseType->find('list');
		$this->set(compact('membershipTypes', 'courseTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoursePrice->id = $id;
		if (!$this->CoursePrice->exists()) {
			throw new NotFoundException(__('Invalid course price'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoursePrice->save($this->request->data)) {
				$this->Session->setFlash(__('The course price has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course price could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoursePrice->read(null, $id);
		}
		$membershipTypes = $this->CoursePrice->MembershipType->find('list');
		$courseTypes = $this->CoursePrice->CourseType->find('list');
		$this->set(compact('membershipTypes', 'courseTypes'));
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
		$this->CoursePrice->id = $id;
		if (!$this->CoursePrice->exists()) {
			throw new NotFoundException(__('Invalid course price'));
		}
		if ($this->CoursePrice->delete()) {
			$this->Session->setFlash(__('Course price deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course price was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
