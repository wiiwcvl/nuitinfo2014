<div id="page-container" class="row">
	
	<div id="page-content" class="text-center jumbotron">

		<div class="text-center jumbotron">
  		<h2>Signing up</h2>
  		<p>If you belong to a humanitarian association, a NGO, a local, national or international organization you can register yourself by completing the fields below.</p>
		</div>

		<div class="acteurs form">
		
			<?php echo $this->Form->create('Acteur', array('inputDefaults' => array('label' => false), 'role' => 'form', 
			"class" => "well form-horizontal")); ?>
				<fieldset>
					<h2><?php echo __('Add Acteur'); ?></h2>

	<div class="text-center control-group">
		<?php echo $this->Form->label('username', 'Login', array('class' => "control-label"));?>
		<div class="controls">
		<?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
		</div>

		<?php echo $this->Form->label('mail', 'Email', array('class' => "control-label"));?>
		<div class="controls">
		<?php echo $this->Form->input('mail', array('class' => 'form-control', 'type' => 'email')); ?>
		</div>

		<?php echo $this->Form->label('password', 'Password', array('class' => "control-label"));?>
		<div class="controls">
		<?php echo $this->Form->input('password', array('class' => 'form-control', 'type' => 'password')); ?>
		</div>

		<?php echo $this->Form->label('nom', 'Organization name', array('class' => "control-label"));?>
		<div class="controls">
		<?php echo $this->Form->input('nom', array('class' => 'form-control')); ?>
		</div>

		<?php echo $this->Form->label('type', 'Organization type', array('class' => "control-label"));?>
		<div class="controls">
		<?php echo $this->Form->input('type', array('class' => 'form-control', 'type' => 'select', 
		'options' => array(1 => "NGO",2 => "Local public institution", 3 => "National public institution",
		4 => "International public institution", 5 => "Other"))); ?>
		</div>

		<?php echo $this->Form->label('presentation', 'Describe your organization', array('class' => "control-label"));?>
		<div class="controls">
		<?php echo $this->Form->input('presentation', array('class' => 'form-control')); ?>
		</div>

				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
			<?php echo $this->Form->end(); ?>

		</div><!-- .form-group -->
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
