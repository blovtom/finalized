<?php
App::uses('AppController', 'Controller');

class CartsController extends AppController {

	public $uses = array('Plugintool','Cart');
	
	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addPlugin($this->request->data['Cart']['plugintool_id']);
		}
		echo $this->Cart->getCount();
                $this->redirect (array('action'=>'view'));
	}
        public function add1() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addPlugin($this->request->data['Cart']['plugintool_id']);
		}
		echo $this->Cart->getCount();
                $this->redirect('/Plugintools');
                echo $this->Cart->getCount();
	}
	
	public function view() {
		$carts = $this->Cart->readPlugin();
		$plugintools = array();
		// var_dump($carts);
		if (null!=$carts) {
			foreach ($carts as $id => $count) {
				if (!$this->Plugintool->exists($id)) {
					throw new NotFoundException(__('Invalid plugin'));
				}
				$options = array('conditions' => array('Plugintool.' . $this->Plugintool->primaryKey => $id));
				$plugintool = $this->Plugintool->find('first', $options);
				$plugintools[]=$plugintool;
			}
		} 
		$this->set('plugintools', $plugintools);
		$this->set('carts', $carts);
	}
		
	public function update() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$cart = array();
				foreach ($this->request->data['Cart']['count'] as $index=>$count) {
					if ($count>0) {
						$plugintoolId = $this->request->data['Cart']['plugintool_id'][$index];
						$cart[$plugintoolId] = $count;
					}
				}
				$this->Cart->savePlugin($cart);
			}
		}
		$this->redirect(array('action'=>'view'));
	}

	public function check()	{
		$carts = $this->Cart->readPlugin();
		$plugintools = array();
		 //var_dump($carts);
		if (null!=$carts) {foreach ($carts as $id => $count) {
				if (!$this->Plugintool->exists($id)) {
					throw new NotFoundException(__('Invalid plugin'));
				}
                                
				$options = array('conditions' => array('Plugintool.' . $this->Plugintool->primaryKey => $id));
				$plugintool = $this->Plugintool->find('first', $options);
				$plugintools[]=$plugintool;			
                                  }                      		
                                } 		
		$functions = array(true);
		$duplicates = array();
		foreach ($plugintools as $plugintool) 
                    {
			foreach ($plugintool['Functionality'] as $func) 
                       {
			$fname = $func['function_name'];
			if (isset($functions[$fname])) 
                           {
                            $duplicates[] = $fname;
                            
                            }                       
                             else                        
                            {
                            $functions[] = $fname;
                                        
                            }							
                        }                                                                                        		
                     
                $hooks =     array('kbAmazonDropShipManagerPluginRequired' => true); 
                $hduplicates = array();
                		 
                    
			foreach ($plugintool['Hook'] as $hook) 
                       {
			$hname = $hook['hook_name'];
			if (isset($hooks[$hname])) 
                           {
                            $hduplicates[] = $hname;                            
                            }                       
                             else                        
                            {
                            $hooks[] = $hname;
                                        
                            }							
                        }                                                                                        		
                     
                       $method =     array('kbAmazonDropShipManagerPluginRequired' => true); 
                $mduplicates = array();
                		
			foreach ($plugintool['Method'] as $method) 
                       {
			$mname = $method['method_name'];
			if (isset($method[$mname])) 
                           {
                            $mduplicates[] = $mname;                            
                            }                       
                             else                        
                            {
                            $method[] = $mname;
                                        
                            }							
                        }                                                                                        		
                                
                     
                     
                $filter =     array('kbAmazonDropShipManagerPluginRequired' => true); 
                $fduplicates = array();
                		
			foreach ($plugintool['Filter'] as $filter) 
                       {
			$fname1 = $filter['tag_name'];
			if (isset($filter[$hname])) 
                           {
                            $fduplicates[] = $fname1;                            
                            }                       
                             else                        
                            {
                            $filter[] = $fname1;
                                        
                            }							
                        }                                                                                        		
                                
                    }
                    
                
                $this->set('mduplicates',$mduplicates);
                $this->set('fduplicates',$fduplicates); 
		$this->set('hduplicates',$hduplicates); 
		$this->set('plugintools', $plugintools);
		$this->set('duplicates', $duplicates);		
               $this->set('carts', $carts);
	}
          
	public function clear() {
            $carts = $this->Cart->readPlugin();
            if (null != $carts)
                {
            $this->Session->destroy();
            
            }
$this->redirect(array('action'=>'view'));
            
        }
 
        
        
        
}