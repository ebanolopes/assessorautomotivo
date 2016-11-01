<?php
class FreiosistemasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';

	public function index(){
		$this->set('freiosistemas', $this->Freiosistema->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Freiosistema->create();
		    if ($this->Freiosistema->save($this->request->data)) {
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

		$freiosistema = $this->Freiosistema->findById($id);
		if (!$freiosistema){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Freiosistema->id = $id;
			if ($this->Freiosistema->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $freiosistema;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$freiosistema = $this->Freiosistema->findById($id);
		if (!$freiosistema){
			throw new NotFoundException(__('invalid freiosistema'));
			}
		$this->set('freiosistema', $freiosistema);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Freiosistema->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
