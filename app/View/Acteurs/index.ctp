
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('action' => 'add'), array('class' => '')); ?></li>						<li class="list-group-item"><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index'), array('class' => '')); ?></li> 
		<li class="list-group-item"><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add'), array('class' => '')); ?></li> 
		<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('controller' => 'crises', 'action' => 'index'), array('class' => '')); ?></li> 
		<li class="list-group-item"><?php echo $this->Html->link(__('New Crisis'), array('controller' => 'crises', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="acteurs index">
		
			<h2><?php echo __('Acteurs'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('username'); ?></th>
															<th><?php echo $this->Paginator->sort('password'); ?></th>
															<th><?php echo $this->Paginator->sort('nom'); ?></th>
															<th><?php echo $this->Paginator->sort('type'); ?></th>
															<th><?php echo $this->Paginator->sort('mail'); ?></th>
															<th><?php echo $this->Paginator->sort('presentation'); ?></th>
															<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($acteurs as $acteur): ?>
	<tr>
		<td><?php echo h($acteur['Acteur']['id']); ?>&nbsp;</td>
		<td><?php echo h($acteur['Acteur']['username']); ?>&nbsp;</td>
		<td><?php echo h($acteur['Acteur']['password']); ?>&nbsp;</td>
		<td><?php echo h($acteur['Acteur']['nom']); ?>&nbsp;</td>
		<td><?php echo h($acteur['Acteur']['type']); ?>&nbsp;</td>
		<td><?php echo h($acteur['Acteur']['mail']); ?>&nbsp;</td>
		<td><?php echo h($acteur['Acteur']['presentation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $acteur['Acteur']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $acteur['Acteur']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $acteur['Acteur']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $acteur['Acteur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>			</small></p>

			<ul class="pagination">
				<?php
		echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
		echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
	?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
