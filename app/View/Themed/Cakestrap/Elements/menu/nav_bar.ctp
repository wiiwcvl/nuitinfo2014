<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
		 	<?php echo $this->Html->link("Home", array("controller" => "page", "action" => "view"), 
		 	array("class" => "navbar-brand")) ?>
		</div>
    	<div>
			 <ul class="nav navbar-nav">
				<li><?php echo $this->Html->link("World view", array("#")); ?></li>
				<li><?php echo $this->Html->link("Local News", array("controller" => "news", "action" => "index")); ?></li>
		     </ul>
			 <ul class="nav navbar-nav navbar-right">
		        <li>
		         <a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
			 </ul>
    	</div>
    </div>
</nav>