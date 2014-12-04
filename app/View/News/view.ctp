
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List News'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New News'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('controller' => 'acteurs', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('controller' => 'acteurs', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('controller' => 'crises', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Crise'), array('controller' => 'crises', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="news view">

			<h2><?php  echo __('News'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($news['News']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Acteur'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($news['Acteur']['id'], array('controller' => 'acteurs', 'action' => 'view', $news['Acteur']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Crise'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($news['Crise']['id'], array('controller' => 'crises', 'action' => 'view', $news['Crise']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($news['News']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Titre'); ?></strong></td>
		<td>
			<?php echo h($news['News']['titre']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Contenu'); ?></strong></td>
		<td>
			<?php echo h($news['News']['contenu']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
