<div class="navbar navbar-default navbar-fixed-top" role="navigation">
     

 <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <?php echo $this->Html->link(__('WordPress Plugin Compatibility Tool'),'/',array('class'=>'navbar-brand'));?>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            
            <li><?php echo $this->Html->link(__('Tool Description'),array('controller'=>'users','action'=>'profile'))?></li>
           <li> <?php echo $this->Html->link('<span ></span> Added Plugins <span class="badge" id="cart-counter"></span>',
                                        array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>  </li>           
            
          </ul>        
        </div><!--/.nav-collapse -->

      </div>

</div>
