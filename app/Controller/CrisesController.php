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

/**
 * signal method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function signal() {
		$types = $this->Crisis->Typecrise->find("list",array("fields" => "intitule"));
		debug($types);
		$this->set("types",$types);
		if ($this->request->is('post')) {
			if($this->request->data['Crisis']['centrex'] == 0 || $this->request->data['Crisis']['centrey'] == 0)
				return;

			$Crisis = $this->Crisis->find("all");
			debug($Crisis);
			foreach ($Crisis as $crisis) {
					
				if (abs($crisis['Crisis']['centrex'] - $this->request->data['Crisis']['centrex'] ) < 1
				 && abs($crisis['Crisis']['centrey'] - $this->request->data['Crisis']['centrey'] ) < 1
				 && $crisis['Crisis']['type'] == $this->request->data['Crisis']['type'] ) {   //1° lat/long-> 111 km 
					debug(abs($crisis['Crisis']['centrex'] - $this->request->data['Crisis']['centrex'] ));

						//$_crise = $crisis['Crisis'];

						$this->Crisis->id = $_crise['id']; 
						///***** UPDATE DE LA CRISE AVEC NOUVELLES COORDONNEES
						//calcul nouveau centre
						//$this->Crisis->saveField('centrex',
						//	);

						//calcul nouveau rayon


						$this->Crisis->id = $crisis['Crisis']['id'];
						$this->Crisis->saveField("nbpings", $crisis['Crisis']['nbpings']+1);
						$this->Session->setFlash('Crisis Reported');
						return $this->redirect(array("controller" => "news", "action" => "index"));
					}

					
				}	
		$this->Crisis->create();
		$this->Crisis->saveField("type", $this->request->data['Crisis']['type']);
		$this->Crisis->saveField("centrex", $this->request->data['Crisis']['centrex']);
		$this->Crisis->saveField("centrey", $this->request->data['Crisis']['centrey']);
		$this->Crisis->saveField("nbpings", 1);
		$this->Session->setFlash('Crisis created');
		return $this->redirect(array("controller" => "news", "action" => "index"));


		}




	}

}


