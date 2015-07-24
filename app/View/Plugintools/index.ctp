<div class="plugintools index">
	
	<div class="paging" align = "right">
	<?php
		echo $this->Paginator->prev('< ' . __('Previous '), array(), null, array('class' => ' prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__(' Next') . ' >', array(), null, array('class' => ' next disabled'));
	?>
	</div>      
         <table class="table table-bordered">
            <h2><?php echo __('Plugins'); ?></h2>
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
                      
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($plugintools as $plugintool): ?>
         
	<tr>
            	

		<td> <?php 
                echo h($plugintool['Plugintool']['id']);   ?> 	</td>
		<td><?php   echo $this->Html->link($plugintool['Plugintool']['name'], array('controller'=>'Plugintools','action'=>'view', $plugintool['Plugintool']['id'])); ?></td>
                 

		<td class="actions">              
                		       
                <?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add1')));  ?> 
		<?php echo $this->Form->hidden('plugintool_id',array('value'=>$plugintool['Plugintool']['id']));?> 
		<?php echo $this->Form->submit('Add',array('class'=>'btn-success btn btn-lg'));?> 
		<?php echo $this->Form->end(); ?> 
                </td>
		
	</tr>
<?php endforeach; ?>

	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging" align = "right">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => ' prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => ' next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li ><?php echo $this->Html->link(__('Return Home'), array('controller'=> 'homepage', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('View Plugin Repository'), array('controller'=> 'plugins', 'action' => 'index')); ?></li>
		
	</ul>
</div>
<script>
$(document).ready(function(){
	$('#add-form').submit(function(e){
		e.preventDefault();
		var tis = $(this);
		$.post(tis.attr('action'),tis.serialize(),function(data){
			$('#cart-counter').text(data);
		});
	});
});
</script>