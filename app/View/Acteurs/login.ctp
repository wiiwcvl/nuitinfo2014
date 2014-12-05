<div class="text-center jumbotron">
	<h2>Log in</h2>
	<p>Please enter your user name and password</p>
</div>

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Acteur',array('class' => 'well form-horizontal')); ?>
	<div class="text-center control-group">
		<label class="control-label" for="pseudo">User name</label>
		<div class="controls">
			<?php echo $this->Form->input('username',array('label' => false)); ?>
		</div>
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<?php echo $this->Form->input('password',array('label' => false)); ?>
		</div>

<?php echo $this->Form->end(array('name' => 'Login' , 'class' => 'btn btn-info')); ?>



