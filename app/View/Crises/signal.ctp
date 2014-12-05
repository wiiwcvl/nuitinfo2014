
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-6">
	<div id="navbar_ext"></div>

	<div class="row container-fluid" style="margin-top: 60px">
	<div class="jumbotron col-sm-10 col-sm-offset-12" style="margin-top: 10px">

 

 
   
	<?php
	echo $this->Form->create('Crisis');
	echo $this->Form->input('type',array('class' => 'form-control','label' => 'Crisis Nature :'));
	echo $this->Form->input('centrex',array('id' => 'CrisisCentrex', 'type' => 'hidden'));
	echo $this->Form->input('centrey',array('id' => 'CrisisCentrey', 'type' => 'hidden'));
	?>
	
  <div class"row container">
  <div class="jumbotron col-lg-5 col-lg-offset-2">
   <?php  
 	echo $this->Form->submit('SUBMIT', array('type' => 'submit' ,'class' => 'btn btn-danger btn-lg big_button'));
	echo $this->Form->end();
	 ?>

</div>
</div>
</div>


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
