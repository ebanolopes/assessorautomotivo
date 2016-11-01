<?php
class PosicaosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('posicaos', $this->Posicao->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Posicao->create();
		    if ($this->Posicao->save($this->request->data)) {
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

		$posicao = $this->Posicao->findById($id);
		if (!$posicao){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Posicao->id = $id;
			if ($this->Posicao->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $posicao;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$posicao = $this->Posicao->findById($id);
		if (!$posicao){
			throw new NotFoundException(__('invalid posicao'));
			}
		$this->set('posicao', $posicao);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Posicao->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
