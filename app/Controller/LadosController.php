<?php
class LadosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('lados', $this->Lado->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Lado->create();
		    if ($this->Lado->save($this->request->data)) {
		    	$this->Session->setFlash(__('Seu lado foi salvo.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Não foi possível ser salvo.'));
		}
	}
	
	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Lado inválido'));
		}

		$lado = $this->Lado->findById($id);
		if (!$lado){
			throw new NotFoundException(__('Lado inválido'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Lado->id = $id;
			if ($this->Lado->save($this->request->data)) {
				$this->Session->setFlash(__('Seu lado foi atualizado.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Não foi possível ser salvo.'));
		}

		if (!$this->request->data) {
			$this->request->data = $lado;
		}

	}

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Combustivel->delete($id)) {
			$this->Session->setFlash(__('O lado com o id %s foi deletado.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
