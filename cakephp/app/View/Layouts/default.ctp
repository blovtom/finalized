<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Wordpress Plugin Compatibility Tool
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<style>
	    body {
		  padding-top: 70px;
		}
    </style>
</head>
<body>
	 
    <?php echo $this->element('navigation');?>
  
    <div class="container">
      <?php echo $this->Session->flash(); ?>
	  <?php echo $this->fetch('content'); ?>      
      <hr>
      <footer>
        <p align = right>Developed by Bola Lewis</p>
        <p align ="right">Advisor: Dr. Mark Hills</p>
        <p align ="right"> East Carolina University</p>
      </footer>      
    </div> <!-- /container -->
    <div class="container">
     

	
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min'); ?>
</body> 
</html>
