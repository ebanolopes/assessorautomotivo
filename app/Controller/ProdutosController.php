<?php
class ProdutosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array(
		'Produto','Grupo','Combustivel','Nomenclatura','Marca','Categoria','Veiculo',
		'Montadora','Potenciamotor','Cilindro','Modelomotor','Modeloveiculo','Direcao','Ventilacao','Freiosistema',
		'Freiotipo','Transmissao','VeiculoProduto','Sessao','Valvula','Posicao','Geracao','Lado');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('geraListaSubgrupo','geraListaProdutos','visualizar','copiarInformacoes');
		$this->layout = 'catalogosite';
	}

	public function copiarInformacoes($fbMarca,$idMarca){
		$this->layout = 'ajax';
		$this->set('produto',$this->Produto->find('first',array(
				'conditions' => array('Produto.marcas_id' => $idMarca,'Produto.cod_fabricante' => $fbMarca)
			)
		));
	}

	public function getInformacoesCarro($idProduto){
		$this->layout = 'ajax';
		$this->set('vproduto',$this->VeiculoProduto->find('all',array(
				'conditions' => array('VeiculoProduto.id_produto' => $idProduto)
			)
		));

	}

	public function index(){
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
		$conditions = array();
		if ($this->request->is('post')){			
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
		}
		$this->VeiculoProduto->Produto->unbindModel(
			array(
				'hasMany' => array('VeiculoProdutos')
			)
		);
		$catalogoData = $this->VeiculoProduto->find('all',array(
			'conditions' => $conditions,
			'order' => 'Montadora.montadora ASC, Veiculo.descricao ASC',
			'recursive' => 2
		));
		$this->set('catalogoData',$catalogoData);
		$this->set('novoCatalogo',$this->VeiculoProduto->findToCatalogo());

		/*
		$this->Produto->unbindModel(array(
			'belongsTo' => array('Grupo','Nomenclatura','Marca','Sessao','Posicao'),
			'hasAndBelongsToMany' => array('Categorias')
		));
		$this->Produto->recursive = 2;
		if ($this->Auth->user('nivel') == 'adm'){
			$this->set('produtos', $this->Produto->find('all'));
		}else{
			$this->set('produtos', $this->Produto->find('all',array('conditions' => array('Marca.empresas_id_empr' => $this->Auth->user('empresas_id_empr')) )));
		}
		*/
	}

	public function geraListaProdutos(){	
		$this->layout = 'catalogosite';	
		$options = array(
			'joins' => array(
				array(
					'table' => 'produtos',
					'alias' => 'Produto',
					'type' => 'INNER',
					'conditions' => array(
						'Produto.id = VeiculoProduto.id_produto'
					)
				)
			),
			'conditions' => array(),
			'recursive' => -1,
			'fields' => array('Produto.cod_fabricante','Produto.cod_original')
		);
		if ($this->request->data['Produto']['grupos_id_grupo']){
			$options['conditions']['Produto.grupos_id_grupo'] = $this->request->data['Produto']['grupos_id_grupo'];
		}
		if ($this->request->data['Produto']['id_subgrupo']){
			$options['conditions']['Produto.id_subgrupo'] = $this->request->data['Produto']['id_subgrupo'];
		}
		if ($this->request->data['Produto']['montadoras'] != null){
			$options['conditions']['VeiculoProduto.id_montadora'] = $this->request->data['Produto']['montadoras'];
		}
		if ($this->request->data['Produto']['veiculo_selecionar']){
			$options['conditions']['VeiculoProduto.id_veiculo'] = $this->request->data['Produto']['veiculo_selecionar'];
		}
		if ($this->request->data['Produto']['potencia_selecionar']){
			$options['conditions']['VeiculoProduto.id_potenciamotors'] = $this->request->data['Produto']['potencia_selecionar'];
		}
		if ($this->request->data['Produto']['combustivel']){
			$options['conditions']['VeiculoProduto.id_tipocombustivel'] = $this->request->data['Produto']['combustivel'];
		}
		if ($this->request->data['Produto']['anos']){
			$options['conditions']['VeiculoProduto.ano_inicial <= '] = $this->request->data['Produto']['anos'];
			$options['conditions']['VeiculoProduto.ano_final >= '] = $this->request->data['Produto']['anos'];
		}
		$produtos = $this->VeiculoProduto->find('all',$options);
		$this->set('produtos',$produtos);
	}

	public function geraListaSubgrupo($pagina = null){

		$this->layout = 'ajax';
		$this->set('pagina',$pagina);
		if ($this->request->data['grupoid']){
			$this->set('subgrupo',$this->Grupo->find('list',array(
				'fields'     => array('Grupo.id','Grupo.grupo'),
				'conditions' => array('Grupo.grupos_id_grupo' =>  $this->request->data['grupoid']),
				'order'		 => array('Grupo.grupo ASC')
			)));
		}else{
			$this->set('subgrupo',array());
		}		
	}

	private function generateDataForm(){
		$sessao = $this->Sessao->find('list',array(
			'fields'     => array('Sessao.id','Sessao.nome'),
			'order'		 => array('Sessao.nome ASC')
		));
		$this->set('sessoes',$sessao);

		$grupo = $this->Grupo->find('list',array(
			'fields'     => array('Grupo.id','Grupo.grupo'),
			'conditions' => array('Grupo.grupos_id_grupo' => null),
			'order'		 => array('Grupo.grupo ASC')
		));
		$this->set('grupo',$grupo);

		$this->set('nomenclatura',$this->Nomenclatura->find('list',array(
			'fields'     => array('Nomenclatura.id','Nomenclatura.codigo'),
			'order'		 => array('Nomenclatura.codigo ASC')
		)));

		if ($this->Auth->user('nivel') == 'adm'){
			$this->set('marca',$this->Marca->find('list',array(
				'fields'     => array('Marca.id','Marca.marca'),
				'order'		 => array('Marca.marca ASC')
			)));
		}else{
			$this->set('marca',$this->Marca->find('list',array(
				'fields'     => array('Marca.id','Marca.marca'),
				'conditions' => array('Marca.empresas_id_empr' => $this->Auth->user('empresas_id_empr')),
				'order'		 => array('Marca.marca ASC')
			)));
		}

		$this->set('categoria',$this->Categoria->find('list',array(
			'fields'     => array('Categoria.id','Categoria.categoria'),
			'order'		 => array('Categoria.categoria ASC')
		)));

		$this->set('montadoras',$this->Montadora->find('list',array(
			'fields'     => array('Montadora.id','Montadora.montadora'),
			'order'		 => array('Montadora.montadora ASC')
		)));

		$this->set('potencias',$this->Potenciamotor->find('list',array(
			'fields'     => array('Potenciamotor.id','Potenciamotor.potencia'),
			'order'		 => array('Potenciamotor.potencia ASC')
		)));

		$this->set('cilindros',$this->Cilindro->find('list',array(
			'fields'     => array('Cilindro.id','Cilindro.quantidade'),
			'order'		 => array('Cilindro.quantidade ASC')
		)));

		$this->set('modelosmotores',$this->Modelomotor->find('list',array(
			'fields'     => array('Modelomotor.id','Modelomotor.modelo'),
			'order'		 => array('Modelomotor.modelo ASC')
		)));

		$this->set('modelosveiculos',$this->Modeloveiculo->find('list',array(
			'fields'     => array('Modeloveiculo.id','Modeloveiculo.modelo'),
			'order'		 => array('Modeloveiculo.modelo ASC')
		)));

		$this->set('combustiveis',$this->Combustivel->find('list',array(
			'fields'     => array('Combustivel.id','Combustivel.tipo'),
			'order'		 => array('Combustivel.tipo ASC')
		)));

		$this->set('direcoes',$this->Direcao->find('list',array(
			'fields'     => array('Direcao.id','Direcao.tipo'),
			'order'		 => array('Direcao.tipo ASC')
		)));

		$this->set('ventilacoes',$this->Ventilacao->find('list',array(
			'fields'     => array('Ventilacao.id','Ventilacao.tipo'),
			'order'		 => array('Ventilacao.tipo ASC')
		)));

		$this->set('freiotipos',$this->Freiotipo->find('list',array(
			'fields'     => array('Freiotipo.id','Freiotipo.tipo'),
			'order'		 => array('Freiotipo.tipo ASC')
		)));

		$this->set('freiosistemas',$this->Freiosistema->find('list',array(
			'fields'     => array('Freiosistema.id','Freiosistema.sistema'),
			'order'		 => array('Freiosistema.sistema ASC')
		)));

		$this->set('transmissoes',$this->Transmissao->find('list',array(
			'fields'     => array('Transmissao.id','Transmissao.tipo'),
			'order'		 => array('Transmissao.tipo ASC')
		)));

		$this->set('valvulas',$this->Valvula->find('list',array(
			'fields' => array('Valvula.id','Valvula.quantidade'),
			'order' => 'Valvula.quantidade ASC'
		)));

		$this->set('posicoes',$this->Posicao->find('list',array(
			'fields' => array('Posicao.id','Posicao.posicao'),
			'order' => 'Posicao.posicao ASC'
		)));

		$this->set('geracoes',$this->Geracao->find('list',array(
			'fields' => array('Geracao.id','Geracao.geracao'),
			'order' => 'Geracao.geracao ASC'
		)));

		$this->set('lados',$this->Lado->find('list',array(
			'fields' => array('Lado.lado','Lado.lado'),
			'order' => 'Lado.lado ASC'
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
	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Produto->create();
		    if (!isset($this->request->data['Produto']['imagem']) || !empty($this->request->data['Produto']['imagem'])){
				$filename = $this->request->data['Produto']['imagem'];
		    	$nomeArquivo = explode('.',$filename['name']);
		    	$nomeArquivo = uniqid() . '.' . $nomeArquivo[sizeof($nomeArquivo) - 1];
				$this->request->data['Produto']['imagem'] = $nomeArquivo;
		    }else{
				$this->request->data['Produto']['imagem'] = 'semfoto.jpg';
		    }
		    foreach ($this->request->data['VeiculoProdutos'] as $key => $value) {
		    	foreach ($this->request->data['VeiculoProdutos'][$key] as $key2 => $value2) {
			    	if ($this->request->data['VeiculoProdutos'][$key][$key2] == 'null'){
			    		unset($this->request->data['VeiculoProdutos'][$key][$key2]);
			    	}

		    	}
		    }
		    if ($this->Produto->saveAll($this->request->data)) {
		    	if (isset($filename)){
					move_uploaded_file($filename['tmp_name'],WWW_ROOT.'img'.DS.'upload'.DS.$nomeArquivo);
		    	}	    		
		    	$this->Session->setFlash(__('Seu produto foi adicionado.'),'success');
		    	return $this->redirect(array('action' => 'index'));
		    	
		    }
		    $this->Session->setFlash(__('Seu produto não foi adicionado.'));		    
		}
		

		$this->generateDataForm();

	}
	
	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$produtos = $this->Produto->find('first',array(
			'conditions' => array('Produto.id' => $id),
			'recursive' => 2
		));
		if (!$produtos){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->request->data['Produto']['imagem']['size'] > 0){
				$filename = $this->request->data['Produto']['imagem'];
		    	$nomeArquivo = explode('.',$filename['name']);
		    	$nomeArquivo = uniqid() . '.' . $nomeArquivo[sizeof($nomeArquivo) - 1];
				$this->request->data['Produto']['imagem'] = $nomeArquivo;
		    	move_uploaded_file($filename['tmp_name'],WWW_ROOT.'img'.DS.'upload'.DS.$nomeArquivo);

			}else{
				unset($this->request->data['Produto']['imagem']);
			}
			if ($this->Produto->saveAll($this->request->data)) {
				$this->Session->setFlash(__('Seu produto foi atualizado.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Não foi possível atualizar o produto'));
		}
		$this->generateDataForm();
		if (!$this->request->data) {
			$this->request->data = $produtos;
		}
        $this->set('grupos',$this->Grupo->find('list',array(
            'fields'     => array('Grupo.id','Grupo.grupo'),
            'order'      => array('Grupo.grupo ASC'),
            'conditions' => array('Grupo.id_sessao' => $this->request->data['Produto']['sessao_id'])
        )));
        if (isset($this->request->data['Produto']['grupos_id_grupo'])){
		
			$this->set('subgrupo',$this->Grupo->find('list',array(
				'fields'     => array('Grupo.id','Grupo.grupo'),
				'conditions' => array('Grupo.grupos_id_grupo' =>  $this->request->data['Produto']['grupos_id_grupo']),
				'order'		 => array('Grupo.grupo ASC')
			)));
		}else{
			$this->set('subgrupo',array());
		}
	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}		
		$produtos = $this->Produto->findById($id);
		if ($this->Produto->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function visualizar($id = null,$id_veiculo_produto = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$produto = $this->Produto->find('first',array(
			'conditions' => array('Produto.id' => $id),
			'recursive' => 1
		));
		$veiculoproduto = $this->VeiculoProduto->find('first',array(
			'conditions' => array('VeiculoProduto.id' => $id_veiculo_produto),
			'recursive' => 2
		));
		if (!$produto){
			throw new NotFoundException(__('invalid produto'));
			}
		$this->set('produto', $produto);
		$this->set('veiculo_produto',$veiculoproduto);

	}		

	public function editVeiculoProdutos($idVeiculoProduto,$idProduto){
		$veiculoProduto = $this->VeiculoProduto->findById($idVeiculoProduto);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VeiculoProduto->save($this->request->data)) {
				$this->Session->setFlash(__('Veículo alterado com sucesso'),'success');
				return $this->redirect(array('action' => 'edit',$idProduto));
			}
			$this->Session->setFlash(__('Não foi possível alterar o veículo.'));
		}

		$this->set('veiculos',$this->Veiculo->find('list',array(
			'fields'     => array('Veiculo.id','Veiculo.descricao'),
			'conditions' => array('Veiculo.montadoras_id_montadora' => $veiculoProduto['VeiculoProduto']['id_montadora']),
			'order'		 => array('Veiculo.descricao ASC')
		)));
		$this->generateDataForm();
		if (!$this->request->data) {
			$this->request->data = $veiculoProduto;

		}
	}
}
	
	

?>
