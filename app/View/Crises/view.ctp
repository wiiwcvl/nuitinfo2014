
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<div class="container-fluid" style="margin-top: 60px">
				<div class="row">
					<div class="col-sm-8">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title">
									<b>Name: </b><?php echo $crisis['Crisis']['nom'] ?> &nbsp &nbsp &nbsp &nbsp &nbsp <b>Severity: level <?php echo $crisis['Crisis']['gravite'] ?>&nbsp</b>
								</h3>
							</div>
							<div class="panel-body">
								<p>
									<b>Status:</b>
									<?php echo $crisis['Crisis']['status'] ?>
								</p>
								<p>
									<b>Type:</b>
									<?php echo $crisis['Typecrise']['intitule'] ?>
								</p>
								<p>
									<b>Actors:</b>
									<?php
									$is_involved = false; 
									foreach($crisis['Acteur'] as $acteur)
									{
										if($acteur['username'] == $logged_actor)
											$is_involved = true;
										echo $acteur['username'];
									}
									?>
								</p>
							</div>
						</div>

						<!-- afficher uniquement si connecté -->
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title">
									<b>Edit crisis</b>
								</h3>
							</div>
							<div class="panel-body">
								<?php echo $this->Html->link('<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span> Edit informations</button>', array('controller' => 'crises', 'action' => 'edit', $crisis['Crisis']['id']), array('escape'=>false)); ?>
								&nbsp
								
								<?php if($is_involved == false) { 
									echo $this->Html->link('<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-in"></span> Become involved</button>', array('controller' => 'crises', 'action' => 'involve', 
									$crisis['Crisis']['id']), array('escape'=>false)) ?>
								&nbsp
								<?php } else {
									echo $this->Html->link('<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Stop involvment</button>', array('controller' => 'crises', 'action' => 'involve',
									$crisis['Crisis']['id']), array('escape'=>false))?>
								
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 class="panel-title">
									<b>Informations</b>
								</h3>
							</div>
							<div class="panel-body">
								<p>
									<?php echo $crisis['Crisis']['description'] ?>

								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
