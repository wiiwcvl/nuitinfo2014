<?php
App::uses('AppController', 'Controller');
/**
 * Crises Controller
 *
 * @property Crisis $Crisis
 * @property PaginatorComponent $Paginator
 */
class CrisesController extends AppController {


	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('view', 'index','signal');
	}
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
		$this->set('crises', $this->Crisis->find('all'));
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
		$this->set('logged_actor', $this->Auth->user()['Acteur']['username']);
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
		$types = $this->Crisis->Typecrise->find("list",array("fields" => "intitule"));
		$this->set("types",$types);

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

	private function measure($x1, $y1, $x2, $y2)
	{
		$R = 6378.137;
		$dx = ($x2 - $x1) * pi() / 180;
		$dy = ($y2 - $y1) * pi() / 180;

		$a = sin($dy/2) * sin($dy/2) + cos($y1 * pi() / 180) * cos($y2 * pi() / 180) * sin($dx / 2) * sin($dx / 2);
		$c = 2 * atan2(sqrt($a), sqrt(1-$a));
		$d = $R * $c;
		return $d * 1000;
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

		$this->set("types",$types);
		if ($this->request->is('post')) {
			if($this->request->data['Crisis']['centrex'] == 0 || $this->request->data['Crisis']['centrey'] == 0)
				return;

			$Crisis = $this->Crisis->find("all");

			$delta_search = 0.5;
			foreach ($Crisis as $crisis) {

				if (abs($crisis['Crisis']['centrex'] - $this->request->data['Crisis']['centrex'] ) < $delta_search
					&& abs($crisis['Crisis']['centrey'] - $this->request->data['Crisis']['centrey'] ) < $delta_search ) {   //1° lat/long-> 111 km 
					if($crisis['Crisis']['type'] == $this->request->data['Crisis']['type'] || $this->request->data['Crisis']['type'] == 1) {
						$_crise = $crisis['Crisis'];
						$this->Crisis->id = $_crise['id']; 
						///***** UPDATE DE LA CRISE AVEC NOUVELLES COORDONNEES
						//calcul nouveau centre
						$this->Crisis->saveField('centrex',
							($_crise['centrex'] * $_crise['nbpings'] + $this->request->data['Crisis']['centrex']) / ($_crise['nbpings'] + 1));
						$this->Crisis->saveField('centrey',
							($_crise['centrey'] * $_crise['nbpings'] + $this->request->data['Crisis']['centrey']) / ($_crise['nbpings'] + 1));
						//calcul nouveau rayon
						$new_rayon = $this->measure($_crise['centrex'], $_crise['centrey'], $this->request->data['Crisis']['centrex'], $this->request->data['Crisis']['centrey']);
						$this->Crisis->saveField("nbpings", $crisis['Crisis']['nbpings']+1);
						$this->Crisis->saveField('rayon', $new_rayon + 10000); // 10000 = marge

						$this->Session->setFlash('Crisis Reported','flash/success');
						return $this->redirect(array("action" => "index"));

					} else if($crisis['Crisis']['type'] == 1) {
						$_crise = $crisis['Crisis'];
						$this->Crisis->id = $_crise['id']; 
						///***** UPDATE DE LA CRISE AVEC NOUVELLES COORDONNEES
						//calcul nouveau centre
						$this->Crisis->saveField('centrex',
							($_crise['centrex'] * $_crise['nbpings'] + $this->request->data['Crisis']['centrex']) / ($_crise['nbpings'] + 1));
						$this->Crisis->saveField('centrey',
							($_crise['centrey'] * $_crise['nbpings'] + $this->request->data['Crisis']['centrey']) / ($_crise['nbpings'] + 1));
						//calcul nouveau rayon
						$new_rayon = $this->measure($_crise['centrex'], $_crise['centrey'], $this->request->data['Crisis']['centrex'], $this->request->data['Crisis']['centrey']);
						$this->Crisis->saveField("nbpings", $crisis['Crisis']['nbpings']+1);
						$this->Crisis->saveField('rayon', $new_rayon + 10000); // 10000 = marge
						$this->Crisis->saveField('type', $this->request->data['Crisis']['type']);
						$this->Session->setFlash('Crisis Reported','flash/success');
						return $this->redirect(array("action" => "index"));
					} 

				}

			}	
			$this->Crisis->create();
			$this->Crisis->saveField("type", $this->request->data['Crisis']['type']);
			$this->Crisis->saveField("centrex", $this->request->data['Crisis']['centrex']);
			$this->Crisis->saveField("centrey", $this->request->data['Crisis']['centrey']);
			$this->Crisis->saveField("nbpings", 1);
			$this->Crisis->saveField('rayon', 10000); // 10 KM
			$this->Session->setFlash('Crisis created','flash/success');
			return $this->redirect(array("controller" => "news", "action" => "index"));

		}

	}

}


