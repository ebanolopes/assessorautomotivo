<?php
class NomenclaturasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('nomenclaturas', $this->Nomenclatura->find('all'));

	}

	public function add() {
		if ($this->request->is('post')) {
		    $this->Nomenclatura->create();
		    
		    
		    try{/*Tenta executar bloco de codigo*/
			    if ($this->Nomenclatura->save($this->request->data)) {
			    	$this->Session->setFlash(__('Your post has been saved.'));
			    	return $this->redirect(array('action' => 'index'));
			    }
			    $this->Session->setFlash(__('Unable to add your post.'));
			} catch (Exception $e){/*tratamento de erro*/
				$this->Session->setFlash(__('Registro com codigo duplicado'));
			}

		}

		
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$nomenclatura = $this->Nomenclatura->findById($id);
		if (!$nomenclatura){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
		
		try{
			if ($this->Nomenclatura->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been upadte.'));
			return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your posts'));
			}catch (Exception $e){/*tratamento de erro*/
				$this->Session->setFlash(__('Registro com codigo duplicado'));
			}
		}

		if (!$this->request->data) {
			$this->request->data = $nomenclatura;
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Nomenclatura->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$nomenclatura = $this->Nomenclatura->findById($id);
		if (!$nomenclatura){
			throw new NotFoundException(__('invalid grupo'));
			}
		$this->set('nomenclatura', $nomenclatura);
	}	
}
	
?>
