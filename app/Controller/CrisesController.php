<?php
App::uses('AppController', 'Controller');
/**
 * Crises Controller
 *
 * @property Crisis $Crisis
 * @property PaginatorComponent $Paginator
 */
class CrisesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Crisis->recursive = 0;
		$this->set('crises', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Crisis->exists($id)) {
			throw new NotFoundException(__('Invalid crisis'));
		}
		$options = array('conditions' => array('Crisis.' . $this->Crisis->primaryKey => $id));
		$this->set('crisis', $this->Crisis->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Crisis->create();
			if ($this->Crisis->save($this->request->data)) {
				$this->Session->setFlash(__('The crisis has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The crisis could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$acteurs = $this->Crisis->Acteur->find('list');
		$this->set(compact('acteurs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Crisis->id = $id;
		if (!$this->Crisis->exists($id)) {
			throw new NotFoundException(__('Invalid crisis'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Crisis->save($this->request->data)) {
				$this->Session->setFlash(__('The crisis has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The crisis could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Crisis.' . $this->Crisis->primaryKey => $id));
			$this->request->data = $this->Crisis->find('first', $options);
		}
		$acteurs = $this->Crisis->Acteur->find('list');
		$this->set(compact('acteurs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Crisis->id = $id;
		if (!$this->Crisis->exists()) {
			throw new NotFoundException(__('Invalid crisis'));
		}
		if ($this->Crisis->delete()) {
			$this->Session->setFlash(__('Crisis deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Crisis was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
