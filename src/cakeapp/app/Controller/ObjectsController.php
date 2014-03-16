<?php
App::uses('AppController', 'Controller');
/**
 * Objects Controller
 *
 * @property Object $Object
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ObjectsController extends AppController {

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
		$this->Object->recursive = 0;
		$this->set('objects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Object->exists($id)) {
			throw new NotFoundException(__('Invalid object'));
		}
		$options = array('conditions' => array('Object.' . $this->Object->primaryKey => $id));
		$this->set('object', $this->Object->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Object->create();
			if ($this->Object->save($this->request->data)) {
				$this->Session->setFlash(__('The object has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The object could not be saved. Please, try again.'));
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
		if (!$this->Object->exists($id)) {
			throw new NotFoundException(__('Invalid object'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Object->save($this->request->data)) {
				$this->Session->setFlash(__('The object has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The object could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Object.' . $this->Object->primaryKey => $id));
			$this->request->data = $this->Object->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Object->id = $id;
		if (!$this->Object->exists()) {
			throw new NotFoundException(__('Invalid object'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Object->delete()) {
			$this->Session->setFlash(__('The object has been deleted.'));
		} else {
			$this->Session->setFlash(__('The object could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
