<?php
class VeiculoProdutosController extends AppController{

	public function index(){

	}

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}		
		$produtos = $this->VeiculoProduto->findById($id);
		if ($this->VeiculoProduto->delete($id)) {
			$this->Session->setFlash(__('Veiculo desvinculado', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}
	
}
	
	

?>
