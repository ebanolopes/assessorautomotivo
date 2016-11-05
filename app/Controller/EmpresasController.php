<?php
class EmpresasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('empresas', $this->Empresa->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Empresa->create();
		    if (!empty($this->request->data['Empresa']['logomarca'])){
				$filename = $this->request->data['Empresa']['logomarca'];
		    	$nomeArquivo = explode('.',$filename['name']);
		    	$nomeArquivo = uniqid() . '.' . $nomeArquivo[sizeof($nomeArquivo) - 1];
				$this->request->data['Empresa']['logomarca'] = $nomeArquivo;
				move_uploaded_file($filename['tmp_name'],WWW_ROOT.'img'.DS.'upload'.DS.$nomeArquivo);		    
		    }else{
		    	$this->request->data['Empresa']['logomarca'] = 'avatar.jpg';
		    }
			$this->request->data['Empresa']['data_cadastro'] = date('Y-m-d');
		    if ($this->Empresa->save($this->request->data)) {	    		
		    	$this->Session->setFlash(__('Your post has been saved.'));
		    	return $this->redirect(array('action' => 'index'));
		    	
		    }
		    if ($this->Empresa->save($this->request->data)) {
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

		$empresas = $this->Empresa->findById($id);
		if (!$empresas){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->request->data['Empresa']['logomarca']['size'] > 0){
				unlink('C:\\wamp\\www\\assessor\\app\\webroot\\img\\upload\\' . $empresa['Empresa']['logomarca']);
				$filename = $this->request->data['Empresa']['logomarca'];
		    	$nomeArquivo = explode('.',$filename['name']);
		    	$nomeArquivo = uniqid() . '.' . $nomeArquivo[sizeof($nomeArquivo) - 1];
				$this->request->data['Empresa']['logomarca'] = $nomeArquivo;
		    	move_uploaded_file($filename['tmp_name'],'C:\\wamp\\www\\assessor\\app\\webroot\\img\\upload\\' . $nomeArquivo);

			}else{
				unset($this->request->data['Empresa']['logomarca']);
			}
			//$this->empresa->id = $id;
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $empresas;
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Empresa->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$empresa = $this->Empresa->findById($id);
		if (!$empresa){
			throw new NotFoundException(__('invalid empresa'));
			}
		$this->set('empresa', $empresa);
	}		
}
	
?>
