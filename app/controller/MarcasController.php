<?php
class MarcasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Empresa','Marca');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('marcas', $this->Marca->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Marca->create();
		    if ($this->Marca->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your post has been saved.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Unable to add your post.'));
		}
			$outputEmpresas = array();
			foreach ($this->Empresa->find('all') as $e) {
				$outputEmpresas[$e['Empresa']['id']] = $e['Empresa']['razao_social'];
			}
			$this->set('empresas',$outputEmpresas );
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$marca = $this->Marca->findById($id);
		if (!$marca){
			throw new NotFoundException(__('invalid telefone'));
			}
		$this->set('marca', $marca);
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$marca = $this->Marca->findById($id);
		if (!$marca){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Marca->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $marca;
			
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

		if ($this->Marca->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}	
}

?>
