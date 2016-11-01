<?php
class CombustivelsController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('combustivels', $this->Combustivel->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Combustivel->create();
		    if ($this->Combustivel->save($this->request->data)) {
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

		$combustivel = $this->Combustivel->findById($id);
		if (!$combustivel){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Combustivel->id = $id;
			if ($this->Combustivel->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $combustivel;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$combustivel = $this->Combustivel->findById($id);
		if (!$combustivel){
			throw new NotFoundException(__('invalid combustivel'));
			}
		$this->set('combustivel', $combustivel);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Combustivel->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
