
<div id="page-container" class="row">

	<div id="page-content" class="col-sm-9">

		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">
					<b>News</b>
				</h3>
			</div>
					<div class="panel-body">

						<div id="newsCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">

							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>   

							<div class="carousel-inner">
								<?php foreach($news as $new){ ?>
								<div class="item active">
									<br>
									<center><?php echo $this->Html->link($new['News']['titre'],
									array('action' => 'view', $new['News']['id'])); ?></center>
									<br>
									<br>
									<br>
								</div>
								<?php } ?>
							</div>
							<a class="carousel-control left" href="#newsCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="carousel-control right" href="#newsCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
