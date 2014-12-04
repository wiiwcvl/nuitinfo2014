
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Crisis'), array('action' => 'add'), array('class' => '')); ?></li>						<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('controller' => 'acteurs', 'action' => 'index'), array('class' => '')); ?></li> 
		<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('controller' => 'acteurs', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="crises index">
		
			<h2><?php echo __('Crises'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
															<th><?php echo $this->Paginator->sort('id'); ?></th>
															<th><?php echo $this->Paginator->sort('type'); ?></th>
															<th><?php echo $this->Paginator->sort('gravite'); ?></th>
															<th><?php echo $this->Paginator->sort('verifie'); ?></th>
															<th><?php echo $this->Paginator->sort('centrex'); ?></th>
															<th><?php echo $this->Paginator->sort('centrey'); ?></th>
															<th><?php echo $this->Paginator->sort('rayon'); ?></th>
															<th><?php echo $this->Paginator->sort('nbpings'); ?></th>
															<th><?php echo $this->Paginator->sort('status'); ?></th>
															<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($crises as $crisis): ?>
	<tr>
		<td><?php echo h($crisis['Crisis']['id']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['type']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['gravite']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['verifie']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['centrex']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['centrey']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['rayon']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['nbpings']); ?>&nbsp;</td>
		<td><?php echo h($crisis['Crisis']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $crisis['Crisis']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $crisis['Crisis']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $crisis['Crisis']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $crisis['Crisis']['id'])); ?>
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
