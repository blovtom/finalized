<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
			<li class="active">repository</li>
		</ol>
	</div>
</div>

<!--
<table class="table table-bordered">
    
	<thead>
            <tr>
              <th><?php echo $this->Paginator->sort('name'); ?></th>  
            </tr>
	</thead>
	<tbody>
<?php foreach ($plugintools as $plugintool): ?>
            <tr>
                <?php echo h($plugintool['Plugintool']['name']) ;?>
            </tr>

<?php endforeach;?>
</tbody>

	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ', '));
		echo $this->Paginator->next(__(' next') . ' > ' , array(), null, array('class' => 'next disabled'));
	?>
	</div>
-->
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
                                    <?php echo $duplicates; ?>        
                                    <?php endforeach;?>                                
                                <?php  if (null == $duplicates){
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


<!--
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
        
        -->