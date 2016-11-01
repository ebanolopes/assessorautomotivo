<?php
class DirecaosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('direcoes', $this->Direcao->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Direcao->create();
		    if ($this->Direcao->save($this->request->data)) {
		    	$this->Session->setFlash(__('Sua direção foi salva.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Não foi possível salvar sua direção'));
		}
	}
	
	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$direcao = $this->Direcao->findById($id);
		if (!$direcao){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Direcao->id = $id;
			if ($this->Direcao->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $direcao;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$direcao = $this->Direcao->findById($id);
		if (!$direcao){
			throw new NotFoundException(__('invalid direcao'));
			}
		$this->set('direcao', $direcao);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Direcao->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
