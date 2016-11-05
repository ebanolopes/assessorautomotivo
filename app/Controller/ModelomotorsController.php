<?php
class ModelomotorsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('modelomotors', $this->Modelomotor->find('all'));

	}

	public function add() {

		if ($this->request->is('post')) {
		    $this->Modelomotor->create();
		    if ($this->Modelomotor->save($this->request->data)) {
		    	$this->Session->setFlash(__('Modelo do motor cadastrado com sucesso'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Impossível adicionar um modelo de motor.'));
		}
	}
	
	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Modelo de motor inválido'));
		}
         //busca no Model
		$modelo = $this->Modelomotor->findById($id);
		if (!$modelo){
			throw new NotFoundException(__('Modelo de motor inválido'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//busca no model
			$this->Modelomotor->id = $id;
			if ($this->Modelomotor->save($this->request->data)) {
				$this->Session->setFlash(__('Modelo de motor atualizado com sucesso'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Impossível adicionar seu modelo de motor'));
		}

		if (!$this->request->data) {
			$this->request->data = $modelo;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Modelo inválido'));
		}
		//busca model
		$modelo = $this->Modelomotor->findById($id);
		if (!$modelo){
			throw new NotFoundException(__('Modelo Inválido'));
		}
		$this->set('modelo', $modelo);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		//busca no model
		if ($this->Modelomotor->delete($id)) {
			$this->Session->setFlash(__('O modelo de motor com o id: %s foi deletado.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

    }

}

?>
