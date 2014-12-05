
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">
		
		<div class="acteurs view panel panel-primary" style="margin-top: 60px;">
			<div class="panel-heading">
				<h3 class="panel-title"><strong><?php  echo h($acteur['Acteur']['nom']); ?></strong></h3>
			</div>
			

			<div class="panel-body">
				<h3>[organisation type]</h3>
				<p><?php echo h($acteur['Acteur']['type']); ?></p>
				<h3>[contact]</h3>
				<p><?php echo h($acteur['Acteur']['mail']); ?></p>
				<h3>[description]</h3>
				<p><?php echo h($acteur['Acteur']['presentation']); ?></p>
			</div>
			
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
