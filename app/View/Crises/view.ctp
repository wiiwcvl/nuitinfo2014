
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Crisis'), array('action' => 'edit', $crisis['Crisis']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Crisis'), array('action' => 'delete', $crisis['Crisis']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $crisis['Crisis']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Crisis'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('controller' => 'acteurs', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('controller' => 'acteurs', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="crises view">

			<h2><?php  echo __('Crisis'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gravite'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['gravite']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Verifie'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['verifie']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Centrex'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['centrex']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Centrey'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['centrey']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rayon'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['rayon']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nbpings'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['nbpings']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Status'); ?></strong></td>
		<td>
			<?php echo h($crisis['Crisis']['status']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Acteurs'); ?></h3>
				
				<?php if (!empty($crisis['Acteur'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Pass'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Presentation'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($crisis['Acteur'] as $acteur): ?>
		<tr>
			<td><?php echo $acteur['id']; ?></td>
			<td><?php echo $acteur['login']; ?></td>
			<td><?php echo $acteur['pass']; ?></td>
			<td><?php echo $acteur['nom']; ?></td>
			<td><?php echo $acteur['type']; ?></td>
			<td><?php echo $acteur['mail']; ?></td>
			<td><?php echo $acteur['presentation']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acteurs', 'action' => 'view', $acteur['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acteurs', 'action' => 'edit', $acteur['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acteurs', 'action' => 'delete', $acteur['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $acteur['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

<pre><?php print_r($crisis); ?></pre>
				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Acteur'), array('controller' => 'acteurs', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
