
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
										<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Acteur.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Acteur.id'))); ?></li>
										<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('action' => 'index')); ?></li>
						<li class="list-group-item"><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('controller' => 'crises', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Crisis'), array('controller' => 'crises', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="acteurs form">
		
			<?php echo $this->Form->create('Acteur', array('inputDefaults' => array('label' => false), 'role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Edit Acteur'); ?></h2>
			<div class="form-group">
	<?php echo $this->Form->label('id', 'id');?>
		<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('username', 'username');?>
		<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('password', 'password');?>
		<?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('nom', 'nom');?>
		<?php echo $this->Form->input('nom', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('type', 'type');?>
		<?php echo $this->Form->input('type', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('mail', 'mail');?>
		<?php echo $this->Form->input('mail', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

<div class="form-group">
	<?php echo $this->Form->label('presentation', 'presentation');?>
		<?php echo $this->Form->input('presentation', array('class' => 'form-control')); ?>
</div><!-- .form-group -->

		<?php echo $this->Form->input('Crisis');?>
				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
