<?php
App::uses('AppController', 'Controller');
/**
 * Labels Controller
 *
 * @property Label $Label
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LabelsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Label->recursive = 0;
		$this->set('labels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Label->exists($id)) {
			throw new NotFoundException(__('Invalid label'));
		}
		$options = array('conditions' => array('Label.' . $this->Label->primaryKey => $id));
		$this->set('label', $this->Label->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Label->create();
			if ($this->Label->save($this->request->data)) {
				$this->Session->setFlash(__('The label has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The label could not be saved. Please, try again.'));
			}
		}
		$information = $this->Label->Information->find('list');
		$subjects = $this->Label->Subject->find('list');
		$this->set(compact('information', 'subjects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Label->exists($id)) {
			throw new NotFoundException(__('Invalid label'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Label->save($this->request->data)) {
				$this->Session->setFlash(__('The label has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The label could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Label.' . $this->Label->primaryKey => $id));
			$this->request->data = $this->Label->find('first', $options);
		}
		$information = $this->Label->Information->find('list');
		$subjects = $this->Label->Subject->find('list');
		$this->set(compact('information', 'subjects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Label->id = $id;
		if (!$this->Label->exists()) {
			throw new NotFoundException(__('Invalid label'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Label->delete()) {
			$this->Session->setFlash(__('The label has been deleted.'));
		} else {
			$this->Session->setFlash(__('The label could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
