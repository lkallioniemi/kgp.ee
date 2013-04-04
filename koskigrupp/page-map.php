<?php
/*
Template Name: Maps Template
*/


/**
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
		<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
		
			var map;
			
			function codeAddress() {
				var address = document.getElementById("address").value;
				geocoder.geocode( { 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						var marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location
						});
					} else {
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
			}
		
			function initialize() {
				geocoder = new google.maps.Geocoder();
				var latlng = new google.maps.LatLng(-34.397, 150.644);
				var mapDiv = document.getElementById('map_canvas');
				var myOptions = { zoom: 12, disableDefaultUI: true, panControl: false, zoomControl: false, scaleControl: false, mapTypeId: google.maps.MapTypeId.ROADMAP }
				map = new google.maps.Map(mapDiv, myOptions);
				geocoder.geocode( { 'address': 'Loomse küla, Halinga, 87222 Pärnumaa'}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						var marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location
						});
					} else {
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
			}
		</script>
		<div id="primary">
			<div id="content" role="main">
				<a href="http://maps.google.com/maps?q=Loomse+k%C3%BCla,+Halinga&hl=fi&ie=UTF8&ll=58.600464,24.527149&spn=0.052231,0.142994&sll=58.483621,24.548792&sspn=0.419242,1.143951&vpsrc=6&hq=Loomse+k%C3%BCla,&hnear=Halinga,+P%C3%A4rnumaa,+Viro&t=m&z=13" target="_blank" style="overflow: hidden;">
					<div id="map">
						<div id="gps"></div>
						<div id="map_canvas"></div>
					</div>
				</a>
			</div><!-- #content -->
		</div><!-- #primary -->
		<script type="text/javascript">
			initialize();
		</script>
<?php get_footer(); ?>