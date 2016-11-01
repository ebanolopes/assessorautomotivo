<?php
class GeracaosController extends AppController{

	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('geracoes', $this->Geracao->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Geracao->create();
		    if ($this->Geracao->save($this->request->data)) {
		    	$this->Session->setFlash(__('Geração salva com sucesso.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Impossível salvar geração.'));


		}
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Geração inválida'));
		}

		$categoria = $this->Geracao->findById($id);
		if (!$categoria){
			throw new NotFoundException(__('Geração inválida'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Geracao->save($this->request->data)) {
				$this->Session->setFlash(__('Geração atualizada com sucesso.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Impossível atualiza sua geração'));
		}
			
		if (!$this->request->data) {
			$this->request->data = $categoria;
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Geracao->delete($id)) {
			$this->Session->setFlash(__('A geração com id: %s foi deletada.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}
}
	
?>
