<?php
class PotenciamotorsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Potenciamotor','Veiculo');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('potenciamotors', $this->Potenciamotor->find('all'));

	}

	public function geraListaMotores($id){
		$this->layout = 'ajax';
		$ids_proibidos = array();
		if (isset($this->request->data['ids'])){
			$ids_proibidos = $this->request->data['ids'];
		}
		$potenciasmotores = array();
		$veiculo = $this->Veiculo->findById($id);
		foreach ($veiculo['PotenciaMotors'] as $pm) {
			if (!in_array($pm['id'], $ids_proibidos)){
				$potenciasmotores[$pm['id']] = $pm['potencia'];
			}
		}
		$this->set('potenciasmotores',$potenciasmotores);

	}

	public function add() {

		if ($this->request->is('post')) {
		    $this->Potenciamotor->create();
		    if ($this->Potenciamotor->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your post has been saved.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Unable to add your post.'));
		}
	}
	
	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
         //busca no Model
		$potencia = $this->Potenciamotor->findById($id);
		if (!$potencia){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//busca no model
			$this->Potenciamotor->id = $id;
			if ($this->Potenciamotor->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $potencia;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}
//busca model
		$potencia = $this->Potenciamotor->findById($id);
		if (!$potencia){
			throw new NotFoundException(__('invalid potencia'));
			}
		$this->set('potencia', $potencia);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		//busca no model
		if ($this->Potenciamotor->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

    }

}

?>
