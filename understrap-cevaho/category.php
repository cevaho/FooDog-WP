<?php
/**
 * The template for displaying category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div  class="col-sm-8 col-12">
			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			
				<div class="row">
				<?php if ( have_posts() ) : ?>
					
					<header class="page-header">
						<h1 class="page-title"><?php $cat = get_the_category(); echo $cat[0]->cat_name;?></h1>
						<?php //the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						
						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'loop-templates/content', get_post_format() );
						?>

						<article class="row" id="post-<?php the_ID(); ?>">
								<div class="col-sm-6 col-12">
								<?php if ( has_post_thumbnail() ) : ?>
										<p>
										<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?></a>
										</p>
									<?php else :?>
										<div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/11/@gralizzybear-family-360x250.jpg" /></div>
								<?php endif; ?>
								</div>
								<div class="col-sm-6 col-12">
								<div class="catnamelist"><?php the_category();?></div>
								<?php
								the_title(
									sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
									'</a></h2>'
								);
								?>

							<div class="entry-content"><?php the_excerpt(); ?></div><!-- .entry-content -->
							</div>
						</article><!-- #post-## -->

					<?php endwhile; ?>
					
				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
				<?php endif; ?>
				</div>
			</div>

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

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

		</div> <!-- .row -->

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
