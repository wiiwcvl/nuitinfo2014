
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
										<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Crisis.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Crisis.id'))); ?></li>
										<li class="list-group-item"><?php echo $this->Html->link(__('List Crises'), array('action' => 'index')); ?></li>
						<li class="list-group-item"><?php echo $this->Html->link(__('List Acteurs'), array('controller' => 'acteurs', 'action' => 'index')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Acteur'), array('controller' => 'acteurs', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="crises form">
		
			<?php echo $this->Form->create('Crisis', array('inputDefaults' => array('label' => false), 'role' => 'form', 'class' => 'form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Edit Crisis'); ?></h2>
			<div class="form-group">
				<?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
			</div><!-- .form-group -->

	<div class="form-group" style="margin-top: 100px; margin-right: 5px;">
        <?php echo $this->Form->label('nom', 'Crisis Name', array('class' => "col-sm-2 control-label"));?>
        <div class="col-sm-4">
        	<?php echo $this->Form->input('nom', array('class' => 'form-control')) ?>
        </div>
      </div>
      
      <div class="form-group" style="margin-right: 5px;">
      	<?php echo $this->Form->label('description', 'Description', array('class' => "col-sm-2 control-label"));?>
          <div class="col-sm-4">
          	<?php echo $this->Form->input('description', array('class' => 'form-control')) ?>
            </textarea>
          </div>
    </div>

    <div class="form-group" style="margin-right: 5px;">
      	<?php echo $this->Form->label('gravite', 'Severity level', array('class' => "col-sm-2 control-label"));?>
          <div class="col-sm-4">
          	<?php echo $this->Form->input('gravite', array('class' => 'form-control', 'min' => 0, 'max' => 4)) ?>
            </textarea>
          </div>
    </div>

    <div class="form-group" style="margin-right: 5px;">
      	<?php echo $this->Form->label('status', 'Status', array('class' => "col-sm-2 control-label"));?>
          <div class="col-sm-4">
          	<?php echo $this->Form->input('status', array('class' => 'form-control')) ?>
            </textarea>
          </div>
    </div>
				</fieldset>
			
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

		<?php echo $this->Form->end(); ?>
			
		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
