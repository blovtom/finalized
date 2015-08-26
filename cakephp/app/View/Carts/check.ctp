<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
			<li class="active">Cart</li>
		</ol>
	</div>
</div>


<h3>Added Plugins</h3>    
<table class="table">
        <tr>
<?php foreach ($plugintools as $plugintool):?>
<td><?php echo $this->Html->link($plugintool['Plugintool']['name'], array('controller'=>'Plugintools','action'=>'view', $plugintool['Plugintool']['id'])); ?></td>
        </tr>
<?php endforeach;?>
</table>
    
<h3>Result</h3>
<h4>
    Recommendation: There are no known compatibility issues<br>
    The minimum version of Wordpress required with the Plugins selected is<?php foreach($plugintools as $plugintool): ?>
<?php  $hold = $plugintool['Plugintool']['requiresAtLeast'];?>
    <?php endforeach ;?>    
    <?php echo (max(array($hold))); ?>
</h4>
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>Function calls Check</th>  
                                        <th>Hook Check</th>
                                        <th>Filter Check</th>
                                        <th>Methods</th>

				</tr>
                                <tr>                                    
                                </tr>
			</thead>
			<tbody>
				<tr>
					<td>
                                   <?php foreach ($duplicates as $dup):?>
                                    <?php echo $dup; ?>  
                                    <?php endforeach;?>                                
                                <?php  if (null ==$duplicates){
                                          echo "These Plugins do not call the same function names";
                                      }  ?>
					</td> 
                                                <td>                               
                                   <?php foreach ($hduplicates as $hdup):?>
                                    <?php echo $hdup; ?>                                                 
                                           <?php endforeach;?>                                
                                <?php  if (null == $hduplicates){
                                          echo "These plugins do not use the same hooks";
                                      }  ?>
					</td> 
                                        <td>                               
                                   <?php foreach ($fduplicates as $fdup):?>
                                    <?php echo $fdup; ?>   
                                           <?php endforeach;?>                                
                                <?php  if (null == $fduplicates){
                                          echo "These plugins do not have the same tag_names";
                                      }  ?>
					</td> 
                                        <td>                               
                                   <?php foreach ($mduplicates as $mdup):?>
                                    <?php echo $mdup; ?>   
                                           <?php endforeach;?>                                
                                <?php  if (null == $mduplicates){
                                          echo "the class names are unique";
                                      }  ?>
					</td> 
				</tr>
                                <tr>                                   
                                </tr>
                               
			</tbody>
		</table>
	</div>
</div>

<div >
    <?php foreach ($plugintools as $plugintool): ?>
 
    <table class="table table-bordered">
            <h3>Detailed Result</h3>
            <h4><?php echo h($plugintool['Plugintool']['name']); ?></h4>
                <thead>
        <h4><?php echo h('Functions'); ?></h4>
        <tr>	            
             <th><?php echo h('Function name'); ?></th>	                       	
         </tr>               
         </thead>               
   <tbody>       
       
       <?php foreach($plugintool['Functionality'] as $func): ?>        
      <tr>         
    <td><?php echo  $func['function_name']; ?></td>   
      </tr>
        <?php  endforeach ?>         
   </tbody>  
   </table>

<table class="table table-bordered">
        <thead>
        <h4><?php echo h('Hooks'); ?></h4>
         <tr>                        
          <th><?php echo h('Hook Name'); ?></th>	
         </tr>               
         </thead>    
    <tbody>  
        
         <?php foreach($plugintool['Hook'] as $hook): ?>
        <tr>
         <td> <?php echo ($hook['hook_name']); ?></td>   
         
         </tr>
          <?php  endforeach ?>
     </tbody> 
  </table>

   <table class="table table-bordered">
        <thead>
        <h3><?php echo h('Method'); ?></h3>
         <tr>           
          <th><?php echo h('class Name'); ?></th>
          <th><?php echo h('Method Name'); ?></th>	
         </tr>               
         </thead>    
    <tbody>  
         <?php foreach($plugintool['Method'] as $meth): ?>
        <tr>
            <td> <?php echo ($meth['class_name']); ?></td>
         <td> <?php echo ($meth['method_name']); ?></td>    
         </tr>
          <?php  endforeach ?>
     </tbody> 
  </table>
     
   <table class="table table-bordered">
        <thead>
        <tr>                        
          <th><?php echo h('Filter'); ?></th>	
         </tr>               
         </thead>    
    <tbody>  
         <?php foreach($plugintool['Filter'] as $filt): ?>
        <tr>
         <td> <?php echo ($filt['tag_name']); ?></td>    
         </tr>
          <?php  endforeach ?>
     </tbody> 
  </table>
    
    <?php endforeach; ?>

            

            
           
</div> 