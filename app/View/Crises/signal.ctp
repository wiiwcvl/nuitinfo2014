
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
										<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('action' => 'index')); ?></li>
						<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('controller' => 'acteurs', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('controller' => 'acteurs', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

	


	<?php

	echo $this->Form->create('Crisis');
	echo $this->Form->input('type');
	echo $this->Form->input('centrex',array('id' => 'CrisisCentrex', 'type' => 'hidden'));
	echo $this->Form->input('centrey',array('id' => 'CrisisCentrey', 'type' => 'hidden'));
	echo $this->Form->end('Send an alert !');
	
	?>

	</div>

<script>
	$(document).bind('ready', function() {
	if (navigator.geolocation)
		{ 
			navigator.geolocation.getCurrentPosition(function(position) {
			 $("#CrisisCentrex").val(position.coords.longitude);
			 $("#CrisisCentrey").val(position.coords.latitude);
			});
		}
	else alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
	});
	</script>


</div>
