
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Acteur'), array('action' => 'edit', $acteur['Acteur']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Acteur'), array('action' => 'delete', $acteur['Acteur']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $acteur['Acteur']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('controller' => 'crises', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Crisis'), array('controller' => 'crises', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="acteurs view">

			<h2><?php  echo __('Acteur'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Login'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['login']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Pass'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['pass']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nom'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['nom']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Type'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['type']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Mail'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['mail']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Presentation'); ?></strong></td>
		<td>
			<?php echo h($acteur['Acteur']['presentation']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related News'); ?></h3>
				
				<?php if (!empty($acteur['News'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Acteur Id'); ?></th>
		<th><?php echo __('Crise Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Titre'); ?></th>
		<th><?php echo __('Contenu'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($acteur['News'] as $news): ?>
		<tr>
			<td><?php echo $news['id']; ?></td>
			<td><?php echo $news['acteur_id']; ?></td>
			<td><?php echo $news['crise_id']; ?></td>
			<td><?php echo $news['created']; ?></td>
			<td><?php echo $news['titre']; ?></td>
			<td><?php echo $news['contenu']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $news['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New News'), array('controller' => 'news', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Crises'); ?></h3>
				
				<?php if (!empty($acteur['Crisis'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Gravite'); ?></th>
		<th><?php echo __('Verifie'); ?></th>
		<th><?php echo __('Centrex'); ?></th>
		<th><?php echo __('Centrey'); ?></th>
		<th><?php echo __('Rayon'); ?></th>
		<th><?php echo __('Nbpings'); ?></th>
		<th><?php echo __('Status'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($acteur['Crisis'] as $crisis): ?>
		<tr>
			<td><?php echo $crisis['id']; ?></td>
			<td><?php echo $crisis['type']; ?></td>
			<td><?php echo $crisis['gravite']; ?></td>
			<td><?php echo $crisis['verifie']; ?></td>
			<td><?php echo $crisis['centrex']; ?></td>
			<td><?php echo $crisis['centrey']; ?></td>
			<td><?php echo $crisis['rayon']; ?></td>
			<td><?php echo $crisis['nbpings']; ?></td>
			<td><?php echo $crisis['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'crises', 'action' => 'view', $crisis['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'crises', 'action' => 'edit', $crisis['id']), array('class' => 'btn btn-default btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'crises', 'action' => 'delete', $crisis['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $crisis['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Crisis'), array('controller' => 'crises', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->