<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'Session',
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'Usuario',
					'fields' => array('username' => 'usuario', 'password' => 'senha')
				)
			),
			'authorize' => array('Controller'),
			'loginRedirect' => array(
				'controller' => 'usuarios',
				'action' => 'dashboard'
		 	),
		 	'logoutRedirect' => array('controller' => 'catalogos','action' => 'index')
		)
		);

	public $layout = 'admin';
	public function beforeFilter(){
		$this->Auth->loginRedirect = array('controller' => 'usuarios', 'action' => 'dashboard');
		$this->Auth->loginAction = array('controller' => 'usuarios', 'action' => 'login');
		$this->Auth->loginError = 'Usuário ou Senha inválidos, tente novamente !';
		$this->Auth->authError = 'Você não está autorizado a acessar essa página';
		//$this->Auth->allow('home','add','login');
	}

	public function isAuthorized($user) {
        // Admin can access every action
        if ($user['nivel'] === 'adm') {
            return true;
        }
        // Default deny
        return true;
    }
}
