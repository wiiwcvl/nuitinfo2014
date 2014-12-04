<?php
App::uses('AppController', 'Controller');
/**
 * Typecrises Controller
 *
 * @property Typecrisis $Typecrisis
 * @property PaginatorComponent $Paginator
 */
class TypecrisesController extends AppController {

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
		$this->Typecrisis->recursive = 0;
		$this->set('typecrises', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typecrisis->exists($id)) {
			throw new NotFoundException(__('Invalid typecrisis'));
		}
		$options = array('conditions' => array('Typecrisis.' . $this->Typecrisis->primaryKey => $id));
		$this->set('typecrisis', $this->Typecrisis->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typecrisis->create();
			if ($this->Typecrisis->save($this->request->data)) {
				$this->Session->setFlash(__('The typecrisis has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typecrisis could not be saved. Please, try again.'), 'flash/error');
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
        $this->Typecrisis->id = $id;
		if (!$this->Typecrisis->exists($id)) {
			throw new NotFoundException(__('Invalid typecrisis'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Typecrisis->save($this->request->data)) {
				$this->Session->setFlash(__('The typecrisis has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typecrisis could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Typecrisis.' . $this->Typecrisis->primaryKey => $id));
			$this->request->data = $this->Typecrisis->find('first', $options);
		}
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
		$this->Typecrisis->id = $id;
		if (!$this->Typecrisis->exists()) {
			throw new NotFoundException(__('Invalid typecrisis'));
		}
		if ($this->Typecrisis->delete()) {
			$this->Session->setFlash(__('Typecrisis deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Typecrisis was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
