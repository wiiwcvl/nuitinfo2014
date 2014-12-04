
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Typecrisis'), array('action' => 'edit', $typecrisis['Typecrisis']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Typecrisis'), array('action' => 'delete', $typecrisis['Typecrisis']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $typecrisis['Typecrisis']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Typecrises'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Typecrisis'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="typecrises view">

			<h2><?php  echo __('Typecrisis'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($typecrisis['Typecrisis']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Intitule'); ?></strong></td>
		<td>
			<?php echo h($typecrisis['Typecrisis']['intitule']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
