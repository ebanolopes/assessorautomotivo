<?php
class MontadorasController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'catalogosite';
	
	public function index(){
		$this->set('montadoras', $this->Montadora->find('all',array('order' => 'Montadora.montadora')));

	}

	public function add() {
		if ($this->request->is('post')) {
			try{
			    $this->Montadora->create();
			    if ($this->Montadora->save($this->request->data)) {
			    	$this->Session->setFlash(__('Sua montadora foi salva.'));
			    	return $this->redirect(array('action' => 'index'));
			    }
			    $this->Session->setFlash(__('Impossível cadastrar a montadora.'));				
			} catch (Exception $e){
				$this->Session->setFlash(__('Impossível cadastrar a montadora.'));
			}
		}
	}
	

	public function visualizar($id = null){
		if (!$id){
			throw new NotFoundException(__('Invalid post'));
			}

		$montadora = $this->Montadora->findById($id);
		if (!$montadora){
			throw new NotFoundException(__('invalid montadora'));
			}
		$this->set('montadora', $montadora);
	}

	public  function edit($id = null)	 {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$montadora = $this->Montadora->findById($id);
		if (!$montadora){
			throw new NotFoundException(__('Invalid post'));			
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			try{			
				$this->Montadora->id = $id;
				if ($this->Montadora->save($this->request->data)) {
					$this->Session->setFlash(__('Sua montadora foi salva.'));
				return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Impossível cadastrar a montadora.'));
			} catch (Exception $e){
				$this->Session->setFlash(__('Impossível cadastrar a montadora.'));
			}
		}

		if (!$this->request->data) {
			$this->request->data = $montadora;
		}

	} 

	public function delete ($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Montadora->delete($id)) {
			$this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}

}

}
?>
