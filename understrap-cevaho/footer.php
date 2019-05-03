<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="row">
						  <div class="col-sm-4 col-12">

									<?php echo wp_list_categories(array(
        'title_li' => ''
    ) ); ?>

							</div>

							<div class="col-sm-4 col-12">
								<div class="site-info">
									<?php
									//echo "oléé <br><br>";
										$popularpost = new WP_Query( array(
										'posts_per_page' => 3,
										'meta_key' => 'wpb_post_views_count',
										'orderby' => 'meta_value_num',
										'order' => 'DESC'  ) );

										//var_dump($popularpost);
										//echo $popularpost[0];
											while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

											<article class="row">
													<div class="col-sm-3 col-3">
															 <?php if ( has_post_thumbnail() ) : ?>
																	 <p>
																			 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
																	 </p>
																 <?php else :?>
																	 <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/09/@milleandlara-milk-360x250.jpg" width="110" height="85" /></div>
															 <?php endif; ?>
													</div>
													<div class="col-sm-9 col-9">
																<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													</div>
											</article>

											<?php endwhile; ?>

									<?php //understrap_site_info(); ?>

								</div><!-- .site-info -->

							</div>
							<div class="col-sm-4 col-12"></div>
					</div>




				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
