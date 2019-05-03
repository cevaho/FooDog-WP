<?php /* Template Name: content-ced */ ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php if ( has_post_thumbnail() ) : ?>
				<p>
						<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'small' ); ?></a>
				</p>
			<?php else :?>
				<div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/11/@gralizzybear-family-360x250.jpg" /></div>
		<?php endif; ?>

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->

	<div class="entry-content"><?php the_excerpt(); ?></div><!-- .entry-content -->

</article><!-- #post-## -->
