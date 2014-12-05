<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Acteur'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('login');
        echo $this->Form->input('pass',array('type'=>'password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>

