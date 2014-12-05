<script type="text/javascript">
	var crises = new Array();
	var lienInvolve = "";
<?php
	$i = 0;

	foreach($crises as $crisis) {
		echo "\tcrises[$i] = new Array();\n";
		echo "\tcrises[$i]['gravite'] = " .$crisis['Crisis']['gravite']. ";\n";
		echo "\tcrises[$i]['verifie'] = " .$crisis['Crisis']['verifie']. ";\n";
		echo "\tcrises[$i]['centrex'] = " .$crisis['Crisis']['centrex']. ";\n";
		echo "\tcrises[$i]['centrey'] = " .$crisis['Crisis']['centrey']. ";\n";
		echo "\tcrises[$i]['rayon'] = " .$crisis['Crisis']['rayon']. ";\n";
		echo "\tcrises[$i]['nbpings'] = " .$crisis['Crisis']['nbpings']. ";\n";
		echo "\tcrises[$i]['status'] = \"" .$crisis['Crisis']['status']. "\";\n";
		echo "\tcrises[$i]['type'] = \"" .$crisis['Typecrise']['intitule']. "\";\n";
		$i++;
	}
$testouille = $this->Html->link("involve", array("controller" => "crises", "action" => 
"involve"));
echo "lienInvolve = '" .$testouille. "';\n";
?>
</script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	var map;
	var markersArray = [];
	var infos = [];

	var mapOptions = {
		zoom: 0,
		center: new google.maps.LatLng(),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		panControl: false,
		mapTypeControl: false,
		panControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE,
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		scaleControl: false,
		streetViewControl: false,
		streetViewControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		}
	};

	var roadAtlasStyles = [{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
			{ "saturation": -100 },
			{ "lightness": -8 },
			{ "gamma": 1.18 }
		]},
	{
		"featureType": "road.arterial",
		"elementType": "geometry",
		"stylers": [
			{ "saturation": -100 },
			{ "gamma": 1 },
			{ "lightness": -24 }
		]},
	{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{ "saturation": -100 }
		]},
	{
		"featureType": "administrative",
		"stylers": [
			{ "saturation": -100 }
		]},
	{
		"featureType": "transit",
		"stylers": [
			{ "saturation": -100 }
		]},
	{
		"featureType": "water",
		"elementType": "geometry.fill",
		"stylers": [
			{ "saturation": -70 }
		]},
	{
		"featureType": "road",
		"stylers": [
			{ "saturation": -100 }
		]},
	{
		"featureType": "administrative",
		"stylers": [
			{ "saturation": -100 }
		]},
	{
		"featureType": "landscape",
		"stylers": [
			{ "saturation": -100 }
		]},
	{
		"featureType": "poi",
		"stylers": [
			{ "saturation": -100 }]
	}];

	var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	//var bounds = new google.maps.LatLngBounds(new google.maps.LatLng(16.0989,16.6687),new google.maps.LatLng(18,18));
	var bounds = new google.maps.LatLngBounds(new google.maps.LatLng(0,-120),new google.maps.LatLng(0,120)); // Global view
	map.fitBounds(bounds);
	for (var i = 0; i < crises.length; i++) {
		var lat = new google.maps.LatLng(crises[i]['centrey'], crises[i]['centrex']);
		var content = "<strong>Latitude: </strong> " +crises[i]['centrey']+ "<br /><strong>Longitude: </strong> " +crises[i]['centrex']+ "<br /><strong>Crise : </strong>" +crises[i]['type']+ "<br /><strong>Status: </strong> " +crises[i]['status']+ "<br /><strong>" +decodeURI(lienInvolve)+ "</strong> ";
		var marker = new google.maps.Marker({
			map: map,
			position: lat,
			content: content
		});
		var radius = crises[i]['rayon'];
		var circleOpts ={
			map: map,
			center: lat,
			radius: radius
		}
		var circle = new google.maps.Circle(circleOpts);

		markersArray.push(marker);
		google.maps.event.addListener(marker, 'click', function () {
			closeInfos();
			var info = new google.maps.InfoWindow({content: this.content});
			info.open(map,this);
			infos[0]=info;
		});
	}

	var styledMapType = new google.maps.StyledMapType(roadAtlasStyles, mapOptions);

	map.mapTypes.set('styledMap', styledMapType);
	map.setMapTypeId('styledMap');

	function closeInfos() {
		if(infos.length > 0) {
			infos[0].set("marker",null);
			infos[0].close();
			infos.length = 0;
		}
	}

	$("#map_canvas").height(0.75 * $("#map_canvas").width());
	$(window).resize(function() {
		$("#map_canvas").height(0.75 * $("#map_canvas").width());
		map.fitBounds(bounds);
	});
});
		</script>

<div id="page-container" class="row">
	<div id="map_canvas" style="width: 100%;"></div>
</div>
