<?php
class NivelsController extends AppController{
	public $helpers = array('Html', 'Form');
	
	public function index(){
		$this->set('nivels', $this->Nivel->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Nivel->create();
		    if ($this->Nivel->save($this->request->data)) {
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

		$nivel = $this->Nivel->findById($id);
		if (!$nivel){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Nivel->id = $id;
			if ($this->Nivel->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $nivel;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$nivel = $this->Nivel->findById($id);
		if (!$nivel){
			throw new NotFoundException(__('invalid nivel'));
			}
		$this->set('nivel', $nivel);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Nivel->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
