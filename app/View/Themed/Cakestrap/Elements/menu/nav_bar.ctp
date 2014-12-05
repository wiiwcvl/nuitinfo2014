<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		  <span class="sr-only">Barre de navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  </button>
		  <?php echo $this->Html->link("Home",array('controller'=>'crises','action'=>'signal'),array('class' => 'navbar-brand')); ?>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			 <ul class="nav navbar-nav">
				<li><?php echo $this->Html->link("World view",array('controller'=>'crises','action'=>'index')); ?></li>
			 </ul>
			 <ul class="nav navbar-nav navbar-right">
				<li><?php echo $this->Html->link("<span class='glyphicon glyphicon-log-in'></span> Log in",array('controller'=>'acteurs','action'=>'login'),array('escape' => false)); ?></li>
				<li><?php echo $this->Html->link("<span class='glyphicon glyphicon-user'></span> Sign up",array('controller'=>'acteurs','action'=>'add'),array('escape'=>false)); ?></li>
			 </ul>
		</div>
	</div>
	<!-- Add jQuery -->
</nav>


