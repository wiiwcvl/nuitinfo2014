<?php
App::uses('AppController', 'Controller');
/**
 * Acteurs Controller
 *
 * @property Acteur $Acteur
 * @property PaginatorComponent $Paginator
 */
class ActeursController extends AppController {

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
		$this->Acteur->recursive = 0;
		$this->set('acteurs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acteur->exists($id)) {
			throw new NotFoundException(__('Invalid acteur'));
		}
		$options = array('conditions' => array('Acteur.' . $this->Acteur->primaryKey => $id));
		$this->set('acteur', $this->Acteur->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acteur->create();
			if ($this->Acteur->save($this->request->data)) {
				$this->Session->setFlash(__('The acteur has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acteur could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$crises = $this->Acteur->Crisis->find('list');
		$this->set(compact('crises'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Acteur->id = $id;
		if (!$this->Acteur->exists($id)) {
			throw new NotFoundException(__('Invalid acteur'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Acteur->save($this->request->data)) {
				$this->Session->setFlash(__('The acteur has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acteur could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Acteur.' . $this->Acteur->primaryKey => $id));
			$this->request->data = $this->Acteur->find('first', $options);
		}
		$crises = $this->Acteur->Crisi->find('list');
		$this->set(compact('crises'));
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
		$this->Acteur->id = $id;
		if (!$this->Acteur->exists()) {
			throw new NotFoundException(__('Invalid acteur'));
		}
		if ($this->Acteur->delete()) {
			$this->Session->setFlash(__('Acteur deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Acteur was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
