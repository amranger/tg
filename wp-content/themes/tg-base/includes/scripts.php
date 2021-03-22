<?php global $shortname; ?>

		<!-- ==============================================
		SCRIPTS
		=============================================== -->	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.2/masonry.pkgd.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.11/jquery.scrollTo.js"></script>

		<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.label_better.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.easypiechart.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/library/js/contact.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/library/js/tg.min.js"></script>

		<script type="text/javascript">

			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});	
		</script>

<?php if(is_page(116)):?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
	(function($) {
	 
	/*
	*  render_map
	*
	*  This function will render a Google Map onto the selected jQuery element
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	$el (jQuery element)
	*  @return	n/a
	*/
	 
	function render_map( $el ) {	 
		// var
		var $markers = $el.find('.marker');
	 
		// vars
		var args = {
			center: new google.maps.LatLng(0, 0),
			zoomControl: true,
			zoomControlOptions: {
            	style: google.maps.ZoomControlStyle.DEFAULT,
			},
			disableDoubleClickZoom: true,
			mapTypeControl: false,			
			scaleControl: false,
	        scrollwheel: false,
	        streetViewControl: true,
	        draggable: true,
	        overviewMapControl: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			<?php 
				date_default_timezone_set("UTC"); 
				date_default_timezone_set('America/Chicago'); 
				$localDate = date('G', time());
				if ($localDate < 7 || $localDate > 20) {
					echo 'styles: [{"featureType":"water","stylers":[{"color":"#021019"}]},{"featureType":"landscape","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"transit","stylers":[{"color":"#146474"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}]';
				} else {
					echo 'styles: [{"featureType":"landscape","stylers":[{"hue":"#F1FF00"},{"saturation":-27.4},{"lightness":9.4},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#0099FF"},{"saturation":-20},{"lightness":36.4},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#00FF4F"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FFB300"},{"saturation":-38},{"lightness":11.2},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00B6FF"},{"saturation":4.2},{"lightness":-63.4},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#9FFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]}]';
				}		
			?>
			};
	 
		// create map	        	
		var map = new google.maps.Map( $el[0], args);
	 
		// add a markers reference
		map.markers = [];
	 
		// add markers
		$markers.each(function(){
	 
	    	add_marker( $(this), map );
	 
		});
	 
		// center map
		center_map( map );
	 
	}
	 
	/*
	*  add_marker
	*
	*  This function will add a marker to the selected Google Map
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	$marker (jQuery element)
	*  @param	map (Google Map object)
	*  @return	n/a
	*/
	 
	function add_marker( $marker, map ) {
	 
		// var
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	 
		// create marker
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map
		});
	 
		// add to array
		map.markers.push( marker );
	 
		// if marker contains HTML, add it to an infoWindow
		if( $marker.html() )
		{
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});
	 
			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function() {
	 
				infowindow.open( map, marker );
	 
			});
		}
	 
	}
	 
	/*
	*  center_map
	*
	*  This function will center the map, showing all markers attached to this map
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	map (Google Map object)
	*  @return	n/a
	*/
	 
	function center_map( map ) {
	 
		// vars
		var bounds = new google.maps.LatLngBounds();
	 
		// loop through all markers and create bounds
		$.each( map.markers, function( i, marker ){
	 
			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
	 
			bounds.extend( latlng );
	 
		});
	 
		// only 1 marker?
		if( map.markers.length == 1 )
		{
			// set center of map
		    map.setCenter( bounds.getCenter() );
		    map.setZoom( 5 );
		}
		else
		{
			// fit to bounds
			map.fitBounds( bounds );
		}
	 
	}
	 
	/*
	*  document ready
	*
	*  This function will render each map when the document is ready (page has loaded)
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	 
	$(document).ready(function(){
	 
		$('.acf-map').each(function(){
	 
			render_map( $(this) );
	 
		});
	 
	});
	 
	})(jQuery);
	</script>
<?php endif; ?>

<script type="text/javascript">
	$('#gform_fields_7').addClass('list-inline');
	$('.gform_title').addClass('scrollimation scale-in in');
</script>

<!-- BEGIN PRIVY WIDGET CODE -->
 <script type='text/javascript'>
 var _d_site = _d_site || '7817656D3E3F4459C8F3B473'; (function() { var script = document.createElement('script'); script.type = 'text/javascript'; script.async = true; script.src = document.location.protocol + '//widget.privy.com/assets/widget.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s); })();
 </script>
 <!-- END PRIVY WIDGET CODE -->
 

 <script>
 //FLEXSLIDER
 	$(document).ready( function() {
	 	$('#home-flexslider').flexslider({
		 	animation: 'slide',
		 	slideshow: false,
		 	prevText: '<i class="fa fa-angle-left"></i>',
		 	nextText: '<i class="fa fa-angle-right"></i>',
		 	
	 	});
	 	$('#project-flexslider').flexslider({
		 	animation: 'slide',
		 	slideshow: true,
		 	slideshowSpeed: 3000,
		 	pauseOnHover: true,
		 	prevText: '<i class="fa fa-angle-left"></i>',
		 	nextText: '<i class="fa fa-angle-right"></i>',
		 });
 	});
 </script>
 
 <script>
 	//Before After Toggle
 	$(function() {
 		//Before After Toggle
 		var flag = true;
 		$('#before-after').mouseenter(function(){
	 		if (flag === true) {
	 			$('#before-after-btn').removeClass('before-button', 'slow').addClass('after-button', 'slow');
			 	$('#before').animate({bottom: '-=95px'}, 1000);
		        $('#after').animate({bottom: '+=95px'}, 1000);
		        flag = false;
		    }
	 	});
	 	
	 	//Add double carets to case studies list items
	 	var $caret = '<i class="fa fa-angle-double-right icon"></i>';
	 	$('.single-project #overview-content li').prepend($caret);
	 	
	 	//The fold video
	 	$(function() {
		 	var $img = $('.postid-155 #modules section:nth-child(3) img');
		 	var embed = '<iframe src="//www.youtube.com/embed/oqRs7yoBVlY" frameborder="0" allowfullscreen></iframe>';
		 	$img.after(embed);
	 	});
 	});
 </script>
 
 