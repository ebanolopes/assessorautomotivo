<?php
class SessaosController extends AppController{
    public $helpers = array('Html', 'Form');
    public $uses = array('Sessao');
    public $layout = 'catalogosite';

    public function index(){
        $this->set('sessaos', $this->Sessao->find('all'));

    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Sessao->create();
            if ($this->Sessao->save($this->request->data)) {
                $this->Session->setFlash(__('Sessão salva com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));

        }
    }

    public  function edit($id = null)    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $categoria = $this->Sessao->findById($id);
        if (!$categoria){
            throw new NotFoundException(__('Invalid post'));            
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Sessao->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been upadte.'));
            return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your posts'));
        }
        if (!$this->request->data) {
            $this->request->data = $categoria;
        }

    } 

    public function delete ($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Sessao->delete($id)) {
            $this->Session->setFlash(__('The post with id: %s has been deletd.', h($id)));
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function visualizar($id = null){
        if (!$id){
            throw new NotFoundException(__('Invalid post'));
            }

        $categoria = $this->Sessao->findById($id);
        if (!$categoria){
            throw new NotFoundException(__('invalid grupo'));
        }
        $this->set('sessao', $categoria);
    }

}
    
?>
