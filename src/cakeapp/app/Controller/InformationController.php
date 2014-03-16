<?php
App::uses('AppController', 'Controller');
/**
 * Information Controller
 *
 * @property Information $Information
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InformationController extends AppController {

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
		$this->Information->recursive = 0;
		$this->set('information', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Information->exists($id)) {
			throw new NotFoundException(__('Invalid information'));
		}
		$options = array('conditions' => array('Information.' . $this->Information->primaryKey => $id));
		$this->set('information', $this->Information->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Information->create();
			if ($this->Information->save($this->request->data)) {
				$this->Session->setFlash(__('The information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The information could not be saved. Please, try again.'));
			}
		}
		$labels = $this->Information->Label->find('list');
		$subjects = $this->Information->Subject->find('list');
		$this->set(compact('labels', 'subjects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Information->exists($id)) {
			throw new NotFoundException(__('Invalid information'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Information->save($this->request->data)) {
				$this->Session->setFlash(__('The information has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The information could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Information.' . $this->Information->primaryKey => $id));
			$this->request->data = $this->Information->find('first', $options);
		}
		$labels = $this->Information->Label->find('list');
		$subjects = $this->Information->Subject->find('list');
		$this->set(compact('labels', 'subjects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Information->id = $id;
		if (!$this->Information->exists()) {
			throw new NotFoundException(__('Invalid information'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Information->delete()) {
			$this->Session->setFlash(__('The information has been deleted.'));
		} else {
			$this->Session->setFlash(__('The information could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
