<?php
App::uses('AppModel', 'Model');
/**
 * Plugintool Model
 *
 * @property Plugins $Plugins
 */
class Plugintool extends AppModel {
public $useTable = 'plugins';

public $validate = array(
    'name' => array(
        'notEmpty' => array(
            'rule' => ('notEmpty')
        ),
    ),
);
/**
 * Display field
 *
 * @var string
 */
 public function beforeFilter() {
        $this->Auth->allow();
    }
	


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany = array(
		'Functionality'=> array(
                    'className'=> 'Functionality'
                ), 
                'Hook'=>array(
                    'className'=>'Hook'
                ),
                'Method' => array(
                    'className'=> 'Method'
                ),
                'Filter' => array(
                    'className' => 'Filter'
                )
        );
//        public $belongsTo = array(
//            'Functionality' => array(
//            'classname' => 'Functionality',
//            'foreignKey' => 'id',
//            'fields' => ''
//          
//        ));
//        
     
}
