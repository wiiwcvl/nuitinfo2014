
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="acteurs index">
		
			<h2><?php echo __('Acteurs'); ?></h2>
			
			<ul><?php foreach($acteurs as $acteur) { ?>
				<li><?php echo $this->Html->link($acteur['Acteur']['username'], 
				array('controller' => 'acteurs', 'action' => 'view', $acteur['Acteur']['id'])); ?></li>
				<?php } ?>
			</ul>
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
