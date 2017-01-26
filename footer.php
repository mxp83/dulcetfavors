<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<?php if( !is_page(24) ) : ?>
<!-- Quick Contact field -->
<div class="wrapper" id="pre-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6"><h3>Contact Us</h3><?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?></div>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<p>&copy; 2017 Dulcet Favors | Designed by Marco Payumo</p>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
