<?php
class TelefonesController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Empresa','Telefone');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('telefones', $this->Telefone->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Telefone->create();
		    if ($this->Telefone->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your post has been saved.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Unable to add your post.'));
		}

		$this->set('empresas',$this->Empresa->find('list',array(
			'fields' => array('Empresa.id','Empresa.razao_social'),
			'order' => 'Empresa.razao_social ASC'
		)));
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$telefone = $this->Telefone->findById($id);
		if (!$telefone){
			throw new NotFoundException(__('invalid telefone'));
			}
		$this->set('telefone', $telefone);
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$telefone = $this->Telefone->findById($id);
		if (!$telefone){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Telefone->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $telefone;
			

			$this->set('empresas',$this->Empresa->find('list',array(
				'fields' => array('Empresa.id','Empresa.razao_social'),
				'order' => 'Empresa.razao_social ASC'
			)));
			
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Telefone->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}	
}

?>
