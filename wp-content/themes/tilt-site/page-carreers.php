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

get_header(); ?>
<div id="carreers" class="area-dark">
	<div class="container">
		<div class="text-container">
			<p class="first-para sans-serif"><strong class="highlight">Get a job you&lsquo;ll love.</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis atque esse sequi dolorem ullam adipisci asperiores doloribus, inventore maxime! Deserunt velit repellendus quia earum quae cum? Quibusdam illum, expedita numquam.</p>
			<a href="<?php echo site_url(); ?>/contact">
				<div class="cube">
					<div class="cube--front">
						<p class="sans-serif">Contact Us</p>
					</div>
					<div class="cub--top">
						<p class="sans-serif">Please</p>
					</div>
				</div>
			</a>
		</div>
	</div> <!-- /end container -->
</div>

<div class="container container--no-padding">
	<div class="container container--half-both area-dark">
		<h1>Job-board</h1>
	</div>
	<div class="group-container">
		<div class="group group--left">
			<a href="mailto:recruitment@wearetilt.com">
				<div class="module module--1-1 module--job module--visible area-dark">
						<div class="module__text">
							<h2 class="light">Lorim Admin</h2>
							<p>Cras mattis consectetur purus sit sinitu sdi sati amet fermentum farami sini esici blamond is sik us samarisdi no esi.</p>
						</div>
				</div>
			</a>
			<a href="mailto:recruitment@wearetilt.com">
				<div class="module module--1-1 module--job module--visible area-dark">
						<div class="module__text">
							<h2 class="light">Etonis Designer</h2>
							<p>Cras mattis consectetur purus sit sinitu sdi sati amet fermentum farami sini esici blamond is sik us samarisdi no esi.</p>
						</div>
				</div>
			</a>
		</div>
		<div class="group group--right">
			<a href="mailto:recruitment@wearetilt.com">
				<div class="module module--1-1 module--job module--visible area-dark">
						<div class="module__text">
							<h2 class="light">Lorem developer</h2>
							<p>Cras mattis consectetur purus sit sinitu sdi sati amet fermentum farami sini esici blamond is sik us samarisdi no esi.</p>
						</div>
				</div>
			</a>
			<a href="mailto:recruitment@wearetilt.com">
				<div class="module module--1-1 module--job module--visible area-dark">
					<div class="module__text">
						<h2 class="light">Motion Ipsum</h2>
						<p>Cras mattis consectetur purus sit sinitu sdi sati amet fermentum farami sini esici blamond is sik us samarisdi no esi.</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="container container--half-top">
	<h1>From intern to fulltime</h1>
	<div class="group-container">
		<div class="group group--left">
			<div class="module module--2-2 module--no-bg">
				<div class="module__text text-align module__description">
					<img src="<?php echo get_template_directory_uri(); ?>/images/miles-image.png" alt="">
					<h2>Miles Tincknell</h2>
					<h3 class="light">Developer</h3>
					<p>“Aranis du sini dolor sit amet di tonitas sit amit”</p>
				</div>
			</div>
			<p class="first-para">Malerisu di sunus alesuada Tortor Parturient magna mollis euismod. Sit amet fermentum. </p>
			<p>Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<p>Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed cone sectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. </p>
		</div>
		<div class="group group--right">
			<div class="module module--2-2 module--no-bg">
				<div class="module__text text-align module__description">
					<img src="<?php echo get_template_directory_uri(); ?>/images/dave-image.png" alt="">
					<h2>Dave Weiss</h2>
					<h3 class="light">Designer</h3>
					<p>“Lorem ipsum dolor sit elur amet di tonitas sit amit”</p>
				</div>
			</div>
			<p class="first-para">Etiam porta sem malesuada Tortor Parturient magna mollis euismamet fermentum. </p>
			<p>Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
			<p>Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur.</p>
		</div>
	</div>
</div>

</div>
<?php get_footer('carreers'); ?>