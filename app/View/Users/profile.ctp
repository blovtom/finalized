<html>

<h2>Tool Description</h2><br>
<body>
Functions:This area runs selected Plugins and their Function calls for potential plugin conflicts. <br>
It verifies that each function call is unique.<br>

Methods:<br><br>

Hooks: Hooks are provided by WordPress to allow a Plugin to "hook into" the rest of WordPress; They call functions in a plugin<br>
at a specific time and set plugins in motion. Two kinds of hooks are Actions and Filters.<br><br>

Filter: Filter is a function that is associated with an existing Action by specifying any existing hook. Filters are functions that<br>
WordPress passes data through at certain points in execution.<br>


<br><br><br>
<?php echo $this->Html->link(__('Return Home'), array('controller'=> 'homepage', 'action' => 'index')); ?>

</body>
</html>