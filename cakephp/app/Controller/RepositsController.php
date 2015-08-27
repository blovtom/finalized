<?php
App::uses('AppController', 'Controller');
 
 
class RepositsController extends AppController {
    public $components = array('Paginator');
    public $uses = 'Plugintool';

    
     public function index() {
    
     $this->set('plugintools', $this->Paginator->paginate());
   
    $plugintools =array();
    
        $functions = array('kbAmazonDropShipManagerPluginRequired' => true);
	$duplicates = array();
		foreach ($plugintools as $plugintool) 
                   {
			foreach ($plugintool['Functionality'] as $func) 
                       {                           
                        
			$fName = $func['function_name'];
                       }
                   
			if (isset($functions[$fName])) 
                           {
                            $duplicates[] = $fName;
                            
                            }                       
                             else                        
                            {
                            $functions[] = $fName;
                                       
                            }							
                        }
                   
    
                $hooks =     array(); 
                $hduplicates = array();
                	foreach ($plugintools as $plugintool) 
                   {	
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
                   }
                $method =     array('kbAmazonDropShipManagerPluginRequired' => true); 
                $mduplicates = array();
                
                foreach ($plugintools as $plugintool) 
                   {
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
                   }
                     
                $filter =     array('kbAmazonDropShipManagerPluginRequired' => true); 
                $fduplicates = array();
                  foreach ($plugintools as $plugintool) 
                   {
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
                
      
     
                   
                
}
}             
?>