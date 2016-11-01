<?php
class VeiculosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Montadora','Veiculo','Potenciamotor','Combustivel','Valvula');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('veiculos', $this->Veiculo->find('all',array('order' => array('Montadora.montadora ASC','Veiculo.descricao ASC'))));

	}


	public function geraListaVeiculos($id=null){
		$this->layout = 'ajax';
		$ids_proibidos = array();
		if (isset($this->request->data['ids'])){
			$ids_proibidos = $this->request->data['ids'];
		}
		$veiculos = $this->Veiculo->find('list',array(
			'fields'     => array('Veiculo.id','Veiculo.descricao'),
			'conditions' => array(
				'Veiculo.montadoras_id_montadora' => $id,
			),
			'order'		 => array('Veiculo.descricao ASC')
		));
		$this->set('veiculos',$veiculos);

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Veiculo->create();
		    if ($this->Veiculo->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your post has been saved.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Unable to add your post.'));
		}

		$this->set('montadora',$this->Montadora->find('list',array(
			'fields' => array('Montadora.id','Montadora.montadora'),
			'order' => 'Montadora.montadora ASC'
		)));

		$this->set('potenciamotor',$this->Potenciamotor->find('list',array(
			'fields' => array('Potenciamotor.id','Potenciamotor.potencia'),
			'order' => 'Potenciamotor.potencia ASC'
		)));

		$this->set('combustivel',$this->Combustivel->find('list',array(
			'fields' => array('Combustivel.id','Combustivel.tipo'),
			'order' => 'Combustivel.tipo ASC'
		)) );

		$this->set('valvula',$this->Valvula->find('list',array(
			'fields' => array('Valvula.id','Valvula.quantidade'),
			'order' => 'Valvula.quantidade ASC'
		)) );
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$veiculo = $this->Veiculo->findById($id);
		if (!$veiculo){
			throw new NotFoundException(__('invalid veiculo'));
			}
		$this->set('veiculo', $veiculo);
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$veiculo = $this->Veiculo->findById($id);
		if (!$veiculo){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $veiculo;
		}
		
		$this->set('montadora',$this->Montadora->find('list',array(
			'fields' => array('Montadora.id','Montadora.montadora'),
			'order' => 'Montadora.montadora ASC'
		)));

		$this->set('potenciamotor',$this->Potenciamotor->find('list',array(
			'fields' => array('Potenciamotor.id','Potenciamotor.potencia'),
			'order' => 'Potenciamotor.potencia ASC'
		)));

		$this->set('combustivel',$this->Combustivel->find('list',array(
			'fields' => array('Combustivel.id','Combustivel.tipo'),
			'order' => 'Combustivel.tipo ASC'
		)) );

		$this->set('valvula',$this->Valvula->find('list',array(
			'fields' => array('Valvula.id','Valvula.quantidade'),
			'order' => 'Valvula.quantidade ASC'
		)) );

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Veiculo->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	
	}	
	
}

?>
