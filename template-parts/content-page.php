<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package market
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php market_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'market' ),
				'after'  => '</div>',
			) );
		?>
		<!-- acf content -->
		<div class="acf-conent">
			<div class="container">
				<div class="left-acf-content">
					<img src="<?php the_field('phone_image'); ?>"" alt="" witdh="300">
				</div>

				<div class="right-acf-content">
					<p class="rich"><?php the_field('rich_text'); ?></p>
					<h3><?php the_field('right_title'); ?></h3>
					<p><?php the_field('right_description'); ?></p>
					<div class="data">
						<h4><?php the_field('right_left_title_content'); ?></h4>
						<p><?php the_field('right_left_description_content'); ?></p>
					</div>
					<div class="reliability ">
						<h4><?php the_field('right_right_title_content'); ?></h4>
						<p><?php the_field('right_right_description_content'); ?></p>
					</div>
				</div>
			</div> <!-- container -->
		</div> <!-- acf content -->

			<div class="second-content">
				<div class="container">
					<div class="right-second-content">
						<p class="rich"><?php the_field('easy_text'); ?></p>
						<h3><?php the_field('easy_title'); ?></h3>
						<p><?php the_field('easy_description'); ?></p>
						<a href="#"><?php the_field('read_link'); ?></a>
					</div>

					<div class="left-second-content">
						<p><?php the_field('text_code'); ?></p>
					</div>
				</div>
			</div>

			<div class="third-content">
				<div class="container">
					<div class="founder">
						<p class="rich"><?php the_field('high_text'); ?></p>
						<h3><?php the_field('quote_of_ceo'); ?></h3>
						<p><?php the_field('ceo_name'); ?></p>
					</div>
				</div>
			</div>

			<div class="sponsor">
				<div class="container">
					<a href="#"><img src="<?php the_field('sponsor_image'); ?>"></a>
					<a href="#"><img src="<?php the_field('sponsor_image_two'); ?>"></a>
					<a href="#"><img src="<?php the_field('sponsor_image_three'); ?>"></a>
					<a href="#"><img src="<?php the_field('sponsor_image_four'); ?>"></a>
					<a href="#"><img src="<?php the_field('sponsor_image_five'); ?>"></a>
				</div>
			</div>
		
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'market' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
