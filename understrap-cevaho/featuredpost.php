<?php /* Template Name: featuredpost */ ?>
<div class="container">

    <?php
				// 1. on défini ce que l'on veut
				$args = array(
				    'post_type' => 'post',
				    'category_name' => 'featured',
				    'posts_per_page' => 3,
				);

				// 2. on exécute la query
				$my_query = new WP_Query($args);

		    // Get total posts
		    $total = $my_query->post_count;
        //echo "nombre de posts à placer : ".$total;
		    // Set indicator to 0;

    ?>

		<div class="row">

    <div  class="col-sm-8 col-12">

      <p><?php echo get_cat_name(14);?></p>
    <?php
				// 3. on lance la boucle !
				if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
		 ?>
            <article class="row">
                <div class="col-sm-6 col-4">
                     <?php if ( has_post_thumbnail() ) : ?>
                         <p>
                             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
                         </p>
                       <?php else :?>
                         <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/09/@milleandlara-milk-360x250.jpg" /></div>
                     <?php endif; ?>
                </div>
                <div class="col-sm-6 col-4">
                      <div class="catnamelist"><?php the_category();?></div>
        							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        							<?php the_excerpt(); ?>
                </div>
            </article>


        <?php
    				endwhile;
            // fin de boucle
    				endif;
    				// 4. On réinitialise à la requête principale (important)
    				wp_reset_postdata();
    		 ?>

      </div>


	<div id="sidebar" class="col-sm-3 col-12">
	
			<aside id="text-13">
				<a href="https://www.thefarmersdog.com/">
					<img class="FDAd sticky-element-original sticky-element-active element-is-not-sticky" src="http://digest.thefarmersdog.com/wp-content/uploads/2017/05/xAd.png.pagespeed.ic.93QlrrlK5i.jpg" pagespeed_url_hash="935270217" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" style="">
				</a>
			</aside>
	</div><!--#sidebar inner-->
			</div><!-- row -->

</div><!-- container -->
