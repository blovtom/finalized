<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
                        <li><?php echo $this->Html->link (__('Plugintools','/'), array('controller'=>'Plugintools','action'=>'index')); ?></li>
			<li class="active">Cart</li>
		</ol>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>Plugin Name</th>
                                        <!-- <th>Functions</th>
                                        <th>Hooks</th>
                                        <th>Filters</th> -->
					
				</tr>
			</thead>
			<tbody>
				<?php $total=0;?>
				<?php foreach ($plugintools as $plugintool):?>
				<tr>    
					<td><?php echo $this->Html->link($plugintool['Plugintool']['name'], array('controller'=>'Plugintools','action'=>'view', $plugintool['Plugintool']['id'])); ?></td>
                                        
                                        <!--
                                    
					<td> 
                                            <?php foreach($plugintool['Functionality'] as $func): ?>
                                            <?php echo $func['function_name']."<br/>\n"; ?>
                                            <?php endforeach ?>
					</td>
                                      
                                        <td> 
                                            <?php foreach($plugintool['Hook'] as $hook): ?>
                                            <?php echo $hook['hook_name']."<br/>\n"; ?>
                                            <?php endforeach ?>
					</td>
                                          <td> 
                                            <?php foreach($plugintool['Filter'] as $hook): ?>
                                            <?php echo $hook['tag_name']."<br/>\n"; ?>
                                            <?php endforeach ?>
					</td> 
					</td>   -->
				</tr>
			
                                
                     
				<?php endforeach;?>
                                
                                
			</tbody>
		</table>

            <p >
                     <?php echo $this->Form->create('Cart',array('url'=>array('controller'=>'carts', 'action'=>'check')));?>
                    
                
                <?php if (null!= $carts){
                    echo $this->Form->submit('Run tool',array('class'=>'btn btn-warning','div'=>false))."&nbsp";
                }		?>
                 
			     <?php echo $this->Form->end();?>      
             </P>

	</div>
</div>
             <div aign="right">
                
             <?php echo $this->Form->create('Cart',array('url'=>array('controller'=>'carts', 'action'=>'clear')));?>
			<?php if (null!= $carts){ 
                            echo $this->Form->submit('Clear Plugins',array('class'=>'btn btn-warning','div'=>false));
                        }?>
                    <?php echo $this->Form->end();?>
                 
                 <?php echo $this->Form->create('Cart',array('url'=>array('controller'=>'Plugintools', 'action'=>'index')));?>
                 <?php if(null == $carts){
                      echo $this->Form->submit('Add Plugins',array('class'=>'btn btn-warning','div'=>false));
                 } ?>
                    <?php echo $this->Form->end();?>
             </div>
