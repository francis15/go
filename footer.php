<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package market
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
			<div class="site-info">
				<div class="container">
				<div class="footer-left">
					<h3 class="rich"><?php the_field("about") ?></h3>
					<p><?php the_field("about_description") ?></p>
				</div>
				<div class="footer-right">
					<div class="products">
						<h3 class="rich"><?php the_field("products")?></h3>
						<a href="#"><?php the_field("products_links")?></a>
					</div>

					<div class="apis">
						<h3 class="rich"><?php the_field("apis")?></h3>
						<a href="#"><?php the_field("apis_links")?></a>
					</div>

					<div class="legal">
						<h3 class="rich"><?php the_field("legal")?></h3>
						<a href="#"><?php the_field("legal_links")?></a>
					</div>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
