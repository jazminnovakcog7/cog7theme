<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cog7theme
 */
?>

<footer id="colophon" class="site-footer">
	<div class="footer-wrapper">
		<div class="footer-column">
			<img src="<?php echo get_template_directory_uri(); ?>/ConferenceLogoPackage (3)/Conference Logo_White.png" alt="Logo" class="footer-logo">
			<h3>News &amp; Updates</h3>
			<ul>
				<li><a href="#">Events</a></li>
				<li><a href="#">Announcements</a></li>
				<li><a href="#">Newsletter</a></li>
			</ul>
		</div>
		<div class="footer-column">
			<h3>Resources</h3>
			<ul>
				<li><a href="#">Downloads</a></li>
				<li><a href="#">Publications</a></li>
				<li><a href="#">Devotionals</a></li>
			</ul>
		</div>
		<div class="footer-column">
			<h3>Online Store</h3>
			<ul>
				<li><a href="#">Books</a></li>
				<li><a href="#">Bible Studies</a></li>
				<li><a href="#">Media</a></li>
			</ul>
		</div>
		<div class="footer-column">
			<img src="<?php echo get_template_directory_uri(); ?>/ConferenceLogoPackage (3)/Conference Logo_Icon.png" alt="Secondary Logo" class="footer-logo secondary-logo">
		</div>
		<div class="footer-column">
			<h3>Contact Us</h3>
			<p>Church of God (Seventh Day)<br>General Conference<br>PO Box 33677<br>Denver, CO 80233<br>Phone: (303) 452-7973<br>Email: contact@cog7.org</p>
		</div>
	</div>

	<div class="footer-bottom">
		<p class="footer-copy">
			Website by cog7. Copyright &copy; <?php echo date('Y'); ?> The General Conference of the Church of God (Seventh Day). All rights reserved.
		</p>
		<div class="footer-social">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
