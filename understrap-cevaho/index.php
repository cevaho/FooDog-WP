<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="main-site-content-wrap">

<?php if(strpos($_SERVER['REQUEST_URI'], 'page') == false){
			include(get_query_template('cinqgrid'));
			include(TEMPLATEPATH . '/featuredpost.php');
 } ?>
			<?php
			//include(TEMPLATEPATH . '/cinqgrid.php');
			//locate_template(array('cinqgrid.php'), true);
			//include(get_query_template('cinqgrid'));

			
			//include(TEMPLATEPATH . '/featuredpost.php');
			//locate_template(array('featuredpost.php'), true);
			//include(get_query_template('featuredpost'));
			?>


</div><!-- main-site-content-wrap -->
<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div  class="col-sm-8 col-12">
				<p>Latest posts</p>
			<!-- Do the left sidebar check and opens the primary div -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>
			<div class="row">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-sm-6 col-12">
						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'loop-templates/content-ced', get_post_format() );
						//include(TEMPLATEPATH . './loop-templates/content-ced.php');
						//include(get_query_template('content-ced'));
						?>

						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
										<p>
												<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?></a>
										</p>
									<?php else :?>
										<div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/11/@gralizzybear-family-360x250.jpg" /></div>
								<?php endif; ?>
								<div class="catnamelist"><?php the_category();?></div>
								<?php
								the_title(
									sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
									'</a></h2>'
								);
								?>

							<div class="entry-content"><?php the_excerpt(); ?></div><!-- .entry-content -->

						</article><!-- #post-## -->

					</div>
					<?php endwhile; ?>

				<?php //else : ?>

					<?php //get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
    </div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>
