<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="site-main col-sm-8 col-12" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_category();?>					

					<h1><?php //get_template_part( 'loop-templates/content', 'single' ); 
					the_title();?></h1>

					<?php if ( has_post_thumbnail() ) : ?>
										<p>
												<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'big' ); ?></a>
										</p>
									<?php else :?>
										<div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/11/@gralizzybear-family-360x250.jpg" /></div>
								<?php endif; ?>
					<?php the_content();?>
					
					<?php understrap_post_nav(); ?>

					<?php wpb_set_post_views(get_the_ID()); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>
			<div id="sidebar" class="col-sm-3 col-12">
					<aside id="socialiser" class="social-icons widget_social_icons">				     							<p>FOLLOW US</p>
		
						<ul class="social-icons-lists social-icons-greyscale icons-background-rounded">
							<li><a class="color-facebook" href="https://www.facebook.com/thefarmersdog" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="color-twitter" href="https://twitter.com/farmersdog" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a class="color-instagram" href="https://www.instagram.com/thefarmersdog/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://pinterest.com/thefarmersdog" class="color-pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
			</aside>
	
			<aside id="text-13">
				<a href="https://www.thefarmersdog.com/">
					<img class="FDAd sticky-element-original sticky-element-active element-is-not-sticky" src="http://digest.thefarmersdog.com/wp-content/uploads/2017/05/xAd.png.pagespeed.ic.93QlrrlK5i.jpg" pagespeed_url_hash="935270217" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="">
				</a>
			</aside>
	

		</div><!--#sidebar inner-->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
