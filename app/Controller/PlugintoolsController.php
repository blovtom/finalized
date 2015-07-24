<?php
App::uses('AppController', 'Controller');

class PlugintoolsController extends AppController {

    public function beforeFilter() {
        $this->Auth->allow();
    }

    public $components = array('Paginator');
private $Functionality;


    public function index(){
      // $this->set('plugintool', $this->Plugintool->find('all'));
        //$this->Plugintool->recursive = 0;
        
      
        $this->set('plugintools', $this->Paginator->paginate());       
    
    }

    public function view($id){

        if (!$this->Plugintool->exists($id)) {
            throw new NotFoundException(__('Invalid Plugin'));
        }

        $plugintool = $this->Plugintool->read(null,$id);
        $this->set(compact('plugintool'));
        

        
     
        
                
                

    }
        

}
?>