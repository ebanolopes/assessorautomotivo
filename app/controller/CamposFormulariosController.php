<?php
class CamposFormulariosController extends AppController{
	public $helpers = array('Html', 'Form');
	public $layout = 'ajax';

	public function generate() {
		if ($this->request->is('post')) {

			$sessaoId = (empty($this->request['sessaoId'])) ? null : $this->request['sessaoId'];
			$this->set('campo',$this->CamposFormulario->find('first',
				array(
					'conditions' => array(
						'CamposFormulario.id_sessao' => $sessaoId
					),
					'fields' => array('CamposFormulario.layout')
				)				
			));

		}
	}
}
	
?>
