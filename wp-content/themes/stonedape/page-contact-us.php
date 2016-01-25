<?php
/*
Template Name: Contact Us
 */

?>

<?php get_header(); ?>
<div id="contact-us-block">	
	<div class="col-md-6" id="contact-left">
		<form id="contact-us-form">
			<h2 class="title">Contact Stoned Ape</h2>
			<!-- <input class="contact-input" name="Name" placeholder="Name">
			<input class="contact-input" name="nmail" placeholder="Email">
			<input class="contact-input" name="email" placeholder="Email">
			<input class="contact-input" name="submit" type="button" value="Contact Stoned Ape"> -->
			<p>Email: <a href="mailto:stonedape@mail.com">stonedape@mail.com</a></p>
            <div id="social" class="clearfix">
              <h3 class="col-md-12 title">Stoned Ape Network</h3>
              <div class="col-xs-6" id="fb-icon"><a href="https://www.facebook.com/astonedape"><img src="<?php bloginfo('template_directory')?>/images/icons/w-facebook-l.png"></a></div>
              <div class="col-xs-6" id="t-icon"><a href="https://twitter.com/_stonedape"><img src="<?php bloginfo('template_directory')?>/images/icons/w-twitter-l.png"></a></div>
            </div>
		</form>
<!-- 		<div id="subscribe-form">
			<h2>Subscribe</h2>
		</div> -->
	</div>
	<div class="col-md-6" id="contact-right">
		<img id="logo" src="<?php bloginfo('template_directory')?>/images/stonedape.jpg" />
	</div>

</div>
<?php get_footer(); ?>