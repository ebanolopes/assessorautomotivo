<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    public function unbindAll() {
        $unbindRelations = array();
        if (!empty($this->hasOne)) {
            $unbindRelations['hasOne'] = array_keys($this->hasOne);
        }
        if (!empty($this->hasMany)) {
            $unbindRelations['hasMany'] = array_keys($this->hasMany);
        }
        if (!empty($this->belongsTo)) {
            $unbindRelations['belongsTo'] = array_keys($this->belongsTo);
        }
        if (!empty($this->hasAndBelongsToMany)) {
            $unbindRelations['hasAndBelongsToMany'] = array_keys($this->hasAndBelongsToMany);
        }        
        if (!empty($unbindRelations)) {
            $this->unbindModel($unbindRelations);            
        }
    }

}
