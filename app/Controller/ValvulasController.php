<?php
class ValvulasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	//cria variavel pra view e busca "Valvula no model"
	public function index(){
		$this->set('valvulas', $this->Valvula->find('all'));

	}

	public function add() {

		if ($this->request->is('post')) {
			//fazendo uma pesquisa, vem do model
		    $this->Valvula->create();
		    if ($this->Valvula->save($this->request->data)) {
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
         //busca no Model
		$valvula = $this->Valvula->findById($id);
		if (!$valvula){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//busca no model
			$this->Valvula->id = $id;
			if ($this->Valvula->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		if (!$this->request->data) {
			$this->request->data = $valvula;
		}

	} 


	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}
//busca model
		$valvula = $this->Valvula->findById($id);
		if (!$valvula){
			throw new NotFoundException(__('invalid valvula'));
			}
		$this->set('valvula', $valvula);
	}


	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		//busca no model
		if ($this->Valvula->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

    }

}

?>
