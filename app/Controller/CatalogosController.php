<?php
class CatalogosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Produto','Contato','Grupo','Sessao','Marca','Categoria','Veiculo','Montadora','Potenciamotor','Combustivel','Modelomotor','Valvula','VeiculoProduto');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','catalogo','contato','about');
		$this->layout = 'catalogosite';
	}

	public function index(){}

	public function about(){}

	public function catalogo(){
		$this->set('sessoes',$this->Sessao->find('list',array(
			'fields'     => array('Sessao.id','Sessao.nome'),
			'order'		 => array('Sessao.nome ASC')
		)));
		$this->set('grupos',$this->Grupo->find('list',
			array(
				'fields' => array('Grupo.id','Grupo.grupo'),
				'conditions' => array( 'Grupo.grupos_id_grupo' => null ),
				'order' => array('Grupo.grupo ASC')
			)
		));
		$this->set('montadoras',$this->Montadora->find('list',array(
			'fields'     => array('Montadora.id','Montadora.montadora'),
			'order'		 => array('Montadora.montadora ASC')
		)));

		$this->set('potencias',$this->Potenciamotor->find('list',array(
			'fields'     => array('Potenciamotor.id','Potenciamotor.potencia'),
			'order'		 => array('Potenciamotor.potencia ASC')
		)));

		$this->set('modelosmotores',$this->Modelomotor->find('list',array(
			'fields'     => array('Modelomotor.id','Modelomotor.modelo'),
			'order'		 => array('Modelomotor.modelo ASC')
		)));

		$this->set('valvulas',$this->Valvula->find('list',array(
			'fields' => array('Valvula.id','Valvula.quantidade'),
			'order' => 'Valvula.quantidade ASC'
		)));

		$this->set('marcas',$this->Marca->find('list',array(
			'fields' => array('Marca.id','Marca.marca')
		)));

		$mes = array();
		for($m = 1; $m <= 12;$m++){
			$mes[$m] = $m;
		}
		$this->set('mes',$mes);

		$anos = array();
		for ($pa = 1900;$pa <= date('Y');$pa++){
			$anos[$pa] = $pa;
		}
		$this->set('anos',$anos);

		$this->set('combustiveis',$this->Combustivel->find('list',array(
			'fields'     => array('Combustivel.id','Combustivel.tipo'),
			'order'		 => array('Combustivel.tipo ASC')
		)));
		$catalogoData = array();
		if ($this->request->is('post')){
			$conditions = array();
			if ($this->request->data['Produto']['marcas_id']){
				$conditions['Produto.marcas_id'] = $this->request->data['Produto']['marcas_id'];
			}
			if ($this->request->data['Produto']['cod_fabricante']){
				$conditions['Produto.cod_fabricante LIKE '] = '%'.$this->request->data['Produto']['cod_fabricante'].'%';
			}
			if ($this->request->data['Produto']['cod_original']){
				$conditions['Produto.cod_original LIKE '] = '%'.$this->request->data['Produto']['cod_original'].'%';
			}
			if ($this->request->data['Produto']['cod_similar']){
				$conditions['Produto.cod_similar LIKE '] = '%'.$this->request->data['Produto']['cod_similar'].'%';
			}
			if ($this->request->data['Produto']['sessao_id']){
				$conditions['Produto.sessao_id'] = $this->request->data['Produto']['sessao_id'];
			}
			if ($this->request->data['Produto']['grupos_id_grupo']){
				$conditions['Produto.grupos_id_grupo'] = $this->request->data['Produto']['grupos_id_grupo'];
			}
			if ($this->request->data['Produto']['id_subgrupo']){
				$conditions['Produto.id_subgrupo'] = $this->request->data['Produto']['id_subgrupo'];
			}
			if ($this->request->data['VeiculoProdutos']['id_montadora']){
				$conditions['VeiculoProduto.id_montadora'] = $this->request->data['VeiculoProdutos']['id_montadora'];
			}
			if ($this->request->data['VeiculoProdutos']['id_montadora']){
				$conditions['VeiculoProduto.id_montadora'] = $this->request->data['VeiculoProdutos']['id_montadora'];
			}
			if ($this->request->data['VeiculoProdutos']['id_veiculo']){
				$conditions['VeiculoProduto.id_veiculo'] = $this->request->data['VeiculoProdutos']['id_veiculo'];
			}
			if ($this->request->data['VeiculoProdutos']['id_modelomotor']){
				$conditions['VeiculoProduto.id_modelomotor'] = $this->request->data['VeiculoProdutos']['id_modelomotor'];
			}
			if ($this->request->data['VeiculoProdutos']['id_potenciamotors']){
				$conditions['VeiculoProduto.id_potenciamotors'] = $this->request->data['VeiculoProdutos']['id_potenciamotors'];
			}
			if ($this->request->data['VeiculoProdutos']['id_valvulas']){
				$conditions['VeiculoProduto.id_valvulas'] = $this->request->data['VeiculoProdutos']['id_valvulas'];
			}
			if ($this->request->data['VeiculoProdutos']['mes_inicial']){
				$conditions['VeiculoProduto.mes_inicial'] = $this->request->data['VeiculoProdutos']['mes_inicial'];
			}
			if ($this->request->data['VeiculoProdutos']['ano_inicial']){
				$conditions['VeiculoProduto.ano_inicial'] = $this->request->data['VeiculoProdutos']['ano_inicial'];
			}
			if ($this->request->data['VeiculoProdutos']['mes_final']){
				$conditions['VeiculoProduto.mes_final'] = $this->request->data['VeiculoProdutos']['mes_final'];
			}
			if ($this->request->data['VeiculoProdutos']['ano_final']){
				$conditions['VeiculoProduto.ano_final'] = $this->request->data['VeiculoProdutos']['ano_final'];
			}
			if ($this->request->data['VeiculoProdutos']['id_tipocombustivel']){
				$conditions['VeiculoProduto.id_tipocombustivel'] = $this->request->data['VeiculoProdutos']['id_tipocombustivel'];
			}
			$catalogoData = $this->VeiculoProduto->find('all',array(
				'conditions' => $conditions,
				'order' => 'Montadora.montadora ASC, Veiculo.descricao ASC',
				'recursive' => 2
			));
		}
		$this->set('catalogoData',$catalogoData);
	}

	public function contato(){
		if ($this->request->is('post')){
			if ($this->Contato->save($this->request->data)){
				$this->Session->setFlash('Seu contato foi enviado com sucesso!', 'success');
				unset($this->request->data['Contato']);
			}
		}
	}

}
	
	

?>
