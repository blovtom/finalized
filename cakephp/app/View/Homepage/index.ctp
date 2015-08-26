<!doctype html>
<html>
<head>
	<title>HTML Editor - Full Version</title>
</head>
<body>


<p align ="left">This tool extracts info from WordPress plugins <br>
The purpose is to help avoid Potential Plugin Conflicts<br>
The Database currently holds more than 5000 wordpress plugins.<br>
It has been categorized into different sections to help with navigation<br>

</p>
<div class="actions">
	 <h3><?php echo ('Actions'); ?></h3>
	<ul>
	    <li><?php echo $this->Html->link(__('Plugin Tool'), array('controller' => 'plugintools', 'action' => 'index')); ?></li>
		<?php $this->Html->link(__('View Plugin Repository'), array('controller'=> 'plugins', 'action' => 'index')); ?>
                <li><?php echo $this->Html->link(__('Results of tool on Repository'), array('controller'=>'Reposits', 'action'=>'index')); ?></li>
        </ul>
</div>

</body>
</html>










