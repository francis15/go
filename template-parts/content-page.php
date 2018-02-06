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
					<img src="<?php the_field('phone_image'); ?>"" alt="">
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

			<div class="service">
				<div class="container">
					<p class="rich"><?php the_field('service_title'); ?></p>
					<h3><?php the_field('service_description'); ?></h3>
					<div class="service-first-row">
						<div class="support">
							<ul>
								<li>
									<img src="<?php the_field('service_image'); ?>">
									<?php the_field("service_image_text") ?>
								</li>
								<li>
									<img src="<?php the_field('service_image_2'); ?>">
									<?php the_field("service_image_text_2") ?>
								</li>
								<li>
									<img src="<?php the_field('service_image_3'); ?>">
									<?php the_field("service_image_text_3") ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="service-second-row">
						<div class="support">
							<ul>
								<li>
									<img src="<?php the_field('service_image_4'); ?>">
									<?php the_field("service_image_text_4") ?>
								</li>
								<li>
									<img src="<?php the_field('service_image_5'); ?>">
									<?php the_field("service_image_text_5") ?>
								</li>
								<li>
									<img src="<?php the_field('service_image_6'); ?>">
									<?php the_field("service_image_text_6") ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="business-talk">
				<div class="container">
					<p class="rich"><?php the_field('business'); ?></p>
					<h3><?php the_field('business_tagline'); ?></h3>

					<div class="plans">
							<ul>
								<li>
									<p class="rich"><?php the_field('personal'); ?></p>
									<img src="<?php the_field("personal_price") ?>">
									<p class="border-none"><?php the_field("personal_description") ?></p>
									<?php the_field("perosnal_plans") ?>
									<?php the_field("perosnal_plans_2") ?>
									<?php the_field("perosnal_plans_3") ?>
									<a href="#"><?php the_field("personall_button")?></a>
								</li>

								<li>
									<p class="rich"><?php the_field('business_name'); ?></p>
									<img src="<?php the_field("business_plan") ?>">
									<p class="border-none"><?php the_field("business_description") ?></p>
									<?php the_field("business_plans") ?>
									<?php the_field("business_plans_2") ?>
									<?php the_field("business_plans_3") ?>
									<a href="#"><?php the_field("business_button")  ?></a>
								</li>

								<li>
									<p class="rich"><?php the_field('corporate'); ?></p>
									<img src="<?php the_field("corporate_price") ?>">
									<p class="border-none"><?php the_field("corporate_description") ?></p>
									<?php the_field("corporate_plans") ?>
									<?php the_field("corporate_plans_2") ?>
									<?php the_field("corporate_plans_3") ?>
									<a href="#"><?php the_field("corporate_button")  ?></a>
								</li>
							</ul>
					</div>
				</div>
			</div>
		
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
