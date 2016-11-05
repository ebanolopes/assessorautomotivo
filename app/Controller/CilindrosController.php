<?php
class CilindrosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('cilindros', $this->Cilindro->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Cilindro->create();
		    if ($this->Cilindro->save($this->request->data)) {
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

		$cilindro = $this->Cilindro->findById($id);
		if (!$cilindro){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Cilindro->id = $id;
			if ($this->Cilindro->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $cilindro;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$cilindro = $this->Cilindro->findById($id);
		if (!$cilindro){
			throw new NotFoundException(__('invalid cilindro'));
			}
		$this->set('cilindro', $cilindro);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Cilindro->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
