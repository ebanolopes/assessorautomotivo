<?php
class UsuariosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Usuario','Empresa');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('usuarios', $this->Usuario->find('all'));


	}

	public function dashboard(){
		$usuario = $this->Usuario->findById($this->Auth->user('id'));
		$this->set('usuario',$usuario);
	}

	public function login() {
		if ($this->request->is('post')){
			if ($this->Auth->login()){
				return $this->redirect($this->Auth->redirect());
			}

			$this->Session->setFlash(__('Usuário ou Senha inválidos, tente novamente !'));
		}
	}

	public function logout(){
		return $this->redirect($this->Auth->logout());
	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Usuario->create();
		    
		    if ($this->request->data['Usuario']['empresas_id_empr'] == 'null'){
		    	$this->request->data['Usuario']['empresas_id_empr'] = null;
		    }
		    try{
			    if ($this->Usuario->save($this->request->data)) {
			    	$this->Session->setFlash(__('Usuário adicionado com sucesso.'));
			    	return $this->redirect(array('action' => 'index'));
			    }
			    $this->Session->setFlash(__('Impossível adicionar usuário.'));

		    }catch (Exception $e){
				$this->Session->setFlash(__('Impossível adicionar usuário.'));
		    }
		}
			$outputEmpresas = array('null' => 'Não Vinculados');
			foreach ($this->Empresa->find('all') as $e) {
				$outputEmpresas[$e['Empresa']['id']] = $e['Empresa']['razao_social'];
			}
			$this->set('empresas',$outputEmpresas );
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$usuario = $this->Usuario->findById($id);
		if (!$usuario){
			throw new NotFoundException(__('invalid usuario'));
			}
		$this->set('usuario', $usuario);
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$usuario = $this->Usuario->findById($id);
		if (!$usuario){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			try{
				if ($this->Usuario->save($this->request->data)) {
					$this->Session->setFlash(__('Usuário adicionado com sucesso.'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Impossível adicionar usuário.'));
		    }catch (Exception $e){
				$this->Session->setFlash(__('Impossível adicionar usuário.'));
		    }

		}

		if (!$this->request->data) {
			$this->request->data = $usuario;
			
			$outputEmpresas = array();
			foreach ($this->Empresa->find('all') as $e) {
				$outputEmpresas[$e['Empresa']['id']] = $e['Empresa']['razao_social'];
			}
			$this->set('empresas',$outputEmpresas );
			
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}	
}

?>
