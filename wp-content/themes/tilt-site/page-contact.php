<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('contact'); ?>

<script type="text/javascript">
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', init);

	officeLocation = new google.maps.LatLng(50.8319498, -0.1392226);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 14,

			// The latitude and longitude to center the map (always required)
			center: officeLocation, // New York
			disableDefaultUI: false,
			scrollwheel: false,
			// How you would like to style the map.
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
		};

		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		var myMarker = 0;

		var newMarker = {
			url: 'images/marker.png',
			size: new google.maps.Size(12, 12),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(6, 6),
			scaledSize: new google.maps.Size(12, 12)
		}

		if(!myMarker){
			var image = new google.maps.MarkerImage('<?php echo get_template_directory_uri(); ?>/images/marker.png',
			new google.maps.Size(14,14), //size
			new google.maps.Point(1,1), //origin
			null,
			new google.maps.Size(14,14)
			);

			myMarker = new google.maps.Marker({
				flat: true,
				icon: image,
				map: map,
				optimized: false,
				position: officeLocation,
				title: 'Our Office',
				visible: true
			});
		}

		// var iconBase = {
		//     url: "images/marker.png",
		//     size: new google.maps.Size(34,34),
		//     origin: new google.maps.Point(0,0),
		//     anchor: new google.maps.Point(17,17)
		// };

		// Let's also add a marker while we're at it

		// var marker = new google.maps.Marker({
		//     position: new google.maps.LatLng(50.832132, -0.139421),
		//     map: map,
		//     title: 'Our Office',
		//     icon: iconBase
		// });
	}
</script>

<header class="contact-page">
</header>

<div class="container area-dark">
	<section class="text-section text-section--centre">
		<h2 class="contact-title"><span class="light">Jobs &amp; Internships</span></h2>
		<a class="contact-email" href="mailto:recruitment@wearetilt.com">recruitment@wearetilt.com</a>
		<h2 class="contact-title"><span class="light">New projects</span></h2>
		<a class="contact-email" href="mailto:jonathan.helm@wearetilt.com">jonathan.helm@wearetilt.com</a>
		<h2 class="contact-title"><span class="light">General Enquiries</span></h2>
		<a class="contact-email" href="mailto:studio@wearetilt.com">studio@wearetilt.com</a>
	</section> <!-- /end text-section -->
</div> <!-- /end container -->

<div class="container area-dark">
	<form id="contact-form" class="contact-form" action="process_form.php" method="post" novalidate="">

		<fieldset class="contact-form__fieldset">
			<div class="form-info-holder">
				 <label  class="contact-form__label" for="field1">What is the name of your brand/company?</label><input class="contact-form__input" name="company_name" id="field1" required="required" type="text">
				 <label class="contact-form__label" for="field3">Please describe your brand/company?</label><textarea class="contact-form__input" rows="5" cols="80" name="company_description" id="field3" required="required"></textarea>
				 <label class="contact-form__label" for="field4">Name</label><input class="contact-form__input" name="contact_name" id="field4" required="required" type="text">
				 <label class="contact-form__label" for="field5">Job Role</label><input class="contact-form__input" name="job_role" id="field5" required="required" type="text">
			</div>

			<div id="funky-border-1" class="funky-border-shizz"></div>
		</fieldset>

		<fieldset class="contact-form__fieldset">

			<div class="form-info-holder">
				<div id="field6-container" class="contact-form__field f_100 checkbox-group required">
					 <label class="contact-form__label" for="field6-1">
						  What are the key criteria/objectives of the project?
					 </label>


					 <div class="option clearfix">
						  <input class="contact-form__input" class="contact-form__input" name="key_objectives" id="field6-1" value="Increase online revenue"
						  type="checkbox">
						  <span class="option-title">
							   Increase online revenue
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="field6-2" value="Revitalise brand identity"
						  type="checkbox">
						  <span class="option-title">
							   Revitalise brand identity
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="field6-3" value="Improve internal communications"
						  type="checkbox">
						  <span class="option-title">
							   Improve internal communications
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="field6-4" value="Update & future-proof design"
						  type="checkbox">
						  <span class="option-title">
							   Update & future-proof design
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="field6-5" value="Rethink & improve existing branding"
						  type="checkbox">
						  <span class="option-title">
							   Rethink & improve existing branding
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="field6-6" value="Create/aid marketing campaign"
						  type="checkbox">
						  <span class="option-title">
							   Create/aid marketing campaign
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="field6-7" value="Improve security" type="checkbox">
						  <span class="option-title">
							   Improve security
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="key_objectives-8" value="Boost creativity"
						  type="checkbox">
						  <span class="option-title">
							   Boost creativity
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="key_objectives-9" value="Optimise our digital platform"
						  type="checkbox">
						  <span class="option-title">
							   Optimise our digital platform
						  </span>
						  <br>
					 </div>


					 <div class="option clearfix">
						  <input class="contact-form__input" name="key_objectives" id="key_objectives-10" value="Other" type="checkbox">
						  <span class="option-title">
							   Other
						  </span>
						  <br>
					 </div>
				</div>


				<div id="field8-container" class="contact-form__field f_100">
					 <label class="contact-form__label" for="field8">
						  If other, please specify
					 </label>
					 <input class="contact-form__input" name="other_objective" id="field8" required="required" type="text">
				</div>


				<div id="field9-container" class="contact-form__field f_100">
					 <label class="contact-form__label" for="field9">
						  Who are the target audience? (please provide as much detail as possible)
					 </label>
					 <textarea class="contact-form__input" rows="5" cols="20" name="target_audience" id="field9" required="required"></textarea>
				</div>


				<div id="field10-container" class="contact-form__field f_100">
					 <label class="contact-form__label" for="field10">
						  Please outline any other notes you would like us to consider
					 </label>
					 <textarea class="contact-form__input" rows="5" cols="20" name="other_notes" id="field10" required="required"></textarea>
				</div>
			</div>


			<div id="funky-border-2" class="funky-border-shizz"></div>

		</fieldset>

		<fieldset class="contact-form__fieldset">

			<div class="form-info-holder">
				<div id="field11-container" class="contact-form__field f_25">
					 <label class="contact-form__label" for="field11">
						  Select
					 </label>
					 <select class="contact-form__input" name="field11" id="field11" required="required">
						  <option id="field11-1" value="Option 1">
							   Option 1
						  </option>
						  <option id="field11-2" value="Option 2">
							   Option 2
						  </option>
						  <option id="field11-3" value="Option 3">
							   Option 3
						  </option>
					 </select>
				</div>


				<div id="field12-container" class="contact-form__field f_25">
					 <label class="contact-form__label" for="field12">
						  Select
					 </label>
					 <select class="contact-form__input" name="field12" id="field12" required="required">
						  <option id="field12-1" value="Option 1">
							   Option 1
						  </option>
						  <option id="field12-2" value="Option 2">
							   Option 2
						  </option>
						  <option id="field12-3" value="Option 3">
							   Option 3
						  </option>
					 </select>
				</div>


				<div id="field13-container" class="contact-form__field f_25">
					 <label class="contact-form__label" for="field13">
						  Select
					 </label>
					 <select class="contact-form__input" name="field13" id="field13" required="required">
						  <option id="field13-1" value="Option 1">
							   Option 1
						  </option>
						  <option id="field13-2" value="Option 2">
							   Option 2
						  </option>
						  <option id="field13-3" value="Option 3">
							   Option 3
						  </option>
					 </select>
				</div>


				<div id="field14-container" class="contact-form__field f_25">
					 <label class="contact-form__label" for="field14">
						  Select
					 </label>
					 <select class="contact-form__input" name="field14" id="field14" required="required">
						  <option id="field14-1" value="Option 1">
							   Option 1
						  </option>
						  <option id="field14-2" value="Option 2">
							   Option 2
						  </option>
						  <option id="field14-3" value="Option 3">
							   Option 3
						  </option>
					 </select>
				</div>


				<div id="field15-container" class="contact-form__field f_50">
					 <label class="contact-form__label" for="field15">
						  Select
					 </label>
					 <select class="contact-form__input" name="field15" id="field15" required="required">
						  <option id="field15-1" value="Option 1">
							   Option 1
						  </option>
						  <option id="field15-2" value="Option 2">
							   Option 2
						  </option>
						  <option id="field15-3" value="Option 3">
							   Option 3
						  </option>
					 </select>
				</div>
			</div>

			<div id="funky-border-4" class="funky-border-shizz"></div>

		</fieldset>

		<div id="form-submit" class="contact-form__field f_100 clearfix submit">
			 <input value="Submit" type="submit">
		</div>

	     </form>
</div>

<div class="container container--no-padding">
	<div id="map">
	</div>
	<div class="map-overlay">
		<h3 class="light marker">Call us</h3>
		<span>+44(0)1273675700</span>
		<h3 class="light marker">Our address</h3>
		<span>Unit 1, Pullman haul,</span>
		<span>41 New England Street,</span>
		<span>Brighton, East Sussex,</span>
		<span>BN1 4GQ, UK</span>
		<a href="https://www.google.co.uk/maps/dir//50.8319498,-0.1392226/@50.8321729,-0.1393055,19.51z/data=!4m2!4m1!3e0?hl=en">
			<div class="cube">
					<div class="cube--front">
						<p class="sans-serif">Get Directions</p>
					</div>
					<div class="cub--top">
						<p class="sans-serif">Come see</p>
					</div>
			</div>
		</a>
	</div>

</div>

</div>

<?php get_footer(); ?>
