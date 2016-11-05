<?php
class CategoriasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $uses = array('Categoria','Grupo');
	public function index(){
		$this->set('Categorias', $this->Categoria->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Categoria->create();
		    if ($this->Categoria->save($this->request->data)) {
		    	$this->Session->setFlash(__('Your post has been saved.'));
		    	return $this->redirect(array('action' => 'index'));
		    }
		    $this->Session->setFlash(__('Unable to add your post.'));


		}

		    $grupo = array();
			foreach ($this->Grupo->find('all') as $e) {
				
				$grupo[$e['Grupo']['id']] = $e['Grupo']['grupo'];
			}
			$this->set('grupo',$grupo );
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$categoria = $this->Categoria->findById($id);
		if (!$categoria){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//$this->empresa->id = $id;
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
		}

		$grupo = array();
			foreach ($this->Grupo->find('all') as $e) {
				
				$grupo[$e['Grupo']['id']] = $e['Grupo']['grupo'];
			}
			$this->set('grupo',$grupo );
			
		if (!$this->request->data) {
			$this->request->data = $categoria;
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Categoria->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$categoria = $this->Categoria->findById($id);
		if (!$categoria){
			throw new NotFoundException(__('invalid grupo'));
			}
		$this->set('categoria', $categoria);
	}	
}
	
?>
