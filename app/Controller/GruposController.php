<?php
class GruposController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Grupo','Sessao');
	public $layout = 'catalogosite';

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('geraListaGrupo');
	}

	public function subgrupos(){
		$this->set('grupos', $this->Grupo->find('all',			
			array(
				'conditions' => 
					array( 'not' =>
						array( 
							'Grupo.grupos_id_grupo' => null 
						)
					),
				'order' => 'Grupo.grupo ASC'
			)));

	}
	
	public function index(){
		$this->set('grupos', $this->Grupo->find('all',array(
			'conditions' => array( 
				'Grupo.grupos_id_grupo' => null 
			),
			'order' => array('Grupo.grupo ASC')
		)));

	}

	public function add_grupo(){
		if ($this->request->is('post')) {
		    $this->Grupo->create();
		    $this->request->data['grupos_id_grupo'] = null;
		    if ($this->Grupo->save($this->request->data)) {
		    	$this->Session->setFlash(__('Seu grupo foi adicionado com sucesso'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Não foi possível adicionar seu grupo'));


		}
		$this->set('sessoes',$this->Sessao->find('list',array(
			'order' => array('Sessao.nome ASC'),
			'fields' => array('Sessao.id','Sessao.nome')			
		)));
	}

	public  function edit_grupo($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$grupos = $this->Grupo->findById($id);
		if (!$grupos){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('Seu grupo foi atualizado com sucesso.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Não foi possível atualizar seu grupo'));
		}

		$this->set('sessoes',$this->Sessao->find('list',array(
			'order' => array('Sessao.nome ASC'),
			'fields' => array('Sessao.id','Sessao.nome')			
		)));
		if (!$this->request->data) {
			$this->request->data = $grupos;
		}

	} 

	public function add() {
		    
		if ($this->request->is('post')) {
		    $this->Grupo->create();
		    if ($this->Grupo->save($this->request->data)) {
		    	$this->Session->setFlash(__('Seu subgrupo foi adicionado com sucesso'),'default',array(),'sucesso');
		    	return $this->redirect(array('action' => 'subgrupos'));
		    }
			$this->Session->setFlash(__('Impossível adicionar o subgrupo'),'default',array(),'erro');
		}

		$grupo = $this->Grupo->find('list',array(
			'fields' 	 => array('Grupo.id','Grupo.grupo'),
			'conditions' => array( 'Grupo.grupos_id_grupo' => null ),
			'order'		 => array('Grupo.grupo ASC')
		));
		$this->set('grupo',$grupo );
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$grupos = $this->Grupo->findById($id);
		if (!$grupos){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('Seu subgrupo foi editado com sucesso.','default',array(),'sucesso'));
			return $this->redirect(array('action' => 'subgrupos'));
			}
			$this->Session->setFlash(__('Impossível editar o subgrupo','default',array(),'erro'));
		}

		if (!$this->request->data) {
			$this->request->data = $grupos;
		}

		$grupo = $this->Grupo->find('list',array(
			'fields' 	 => array('Grupo.id','Grupo.grupo'),
			'conditions' => array( 'Grupo.grupos_id_grupo' => null ),
			'order'		 => array('Grupo.grupo ASC')
		));
		$this->set('grupo',$grupo );
	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash(__('O subgrupo foi excluído', h($id)),'default',array(),'sucesso');
			return $this->redirect(array('action' => 'subgrupos'));
		}
	}

	public function deletegrupos ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash(__('O subgrupo foi excluído', h($id)),'default',array(),'sucesso');
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$grupo = $this->Grupo->findById($id);
		if (!$grupo){
			throw new NotFoundException(__('invalid grupo'));
			}
		$this->set('grupo', $grupo);
	}	

    public function geraListaGrupo($id){
        $this->layout = 'ajax';
        $this->set('grupos',$this->Grupo->find('list',array(
            'fields'     => array('Grupo.id','Grupo.grupo'),
            'order'      => array('Grupo.grupo ASC'),
            'conditions' => array('Grupo.id_sessao' => $id)
        )));
    }
}
	
?>
