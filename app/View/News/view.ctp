
<div id="page-container" class="row">
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo($news['News']['titre'] . " par " . $news['Acteur']['username']); ?></h2>
		
		<p><?php echo($news['News']['contenu']) ?></p>
		<p><?php echo($news['News']['created']) ?></p>	
			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
