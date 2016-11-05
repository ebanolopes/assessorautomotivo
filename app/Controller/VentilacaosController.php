<?php
class VentilacaosController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function index(){
		$this->set('ventilacoes', $this->Ventilacao->find('all',array('order' => 'Ventilacao.tipo ASC')));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Ventilacao->create();
		    if ($this->Ventilacao->save($this->request->data)) {
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

		$ventilacao = $this->Ventilacao->findById($id);
		if (!$ventilacao){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Ventilacao->id = $id;
			if ($this->Ventilacao->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $ventilacao;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$ventilacao = $this->ventilacao->findById($id);
		if (!$ventilacao){
			throw new NotFoundException(__('invalid ventilacao'));
			}
		$this->set('ventilacao', $ventilacao);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Ventilacao->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
