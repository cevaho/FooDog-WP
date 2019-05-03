<?php /* Template Name: cinqgrid */ ?>
<div class="container" id="topindex">

    <?php
				// 1. on défini ce que l'on veut
				$args = array(
				    'post_type' => 'post',
				    'category_name' => 'nutrition',
				    'posts_per_page' => 5,
				);

				// 2. on exécute la query
				$my_query = new WP_Query($args);

		    // Get total posts
		    $total = $my_query->post_count;
        //echo "nombre de posts à placer : ".$total;
		    // Set indicator to 0;
		    $i = 0;
    ?>

		<div class="row">

    <?php
				// 3. on lance la boucle !
				if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
		 ?>

        <?php if ( $i == 0 ){	?>

								<div class="is-left-col col-sm-7 col-12">

                      <?php if ( has_post_thumbnail() ) : ?>
                          <p>
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
                          </p>
                        <?php else :?>
                          <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2016/07/564x510xFresh-Snacks-Image-564x510.jpg.pagespeed.ic.3UunYgh0Md.jpg" /></div>
                      <?php endif; ?>
                      <div class="catnamelist"><?php the_category();?></div>
        							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        				</div><!-- col left -->

        <?php } ?>

        <?php if ( $i == 1 ){?>
                <div class="is-right-col col-sm-5 col-12">
                    <div class="row">
                        <div class="is-right-col-el col-6">

                             <?php if ( has_post_thumbnail() ) : ?>
                                  <p>
                                     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
                                  </p>
                                <?php else :?>
                                  <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/02/300x270x,40lifeofvi-vomit-300x270.jpg.pagespeed.ic.FgvvBP_XSw.jpg" /></div>
                              <?php endif; ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
        <?php }?>

        <?php if ( $i == 2 ){?>
                  <div class="is-right-col-el col-6">

                        <?php if ( has_post_thumbnail() ) : ?>
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
                            </p>
                          <?php else :?>
                            <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/01/300x270xBenefits-of-feeding-fresh-300x270.jpg.pagespeed.ic.vY5EU0i5LO.jpg" /></div>
                        <?php endif; ?>
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                </div><!-- fin div row -->
        <?php }?>

        <?php if ( $i == 3 ){?>
                  <div class="row">
                  <div class="is-right-col-el col-6">

                        <?php if ( has_post_thumbnail() ) : ?>
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
                            </p>
                          <?php else :?>
                            <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2017/08/300x270x,40milletandlara-homecooking-300x270.jpg.pagespeed.ic.wHD4Ra2xoo.jpg" /></div>
                        <?php endif; ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
        <?php }?>

        <?php if( $i == 4 ){?>
                  <div class="is-right-col-el col-6">
  							            <?php if ( has_post_thumbnail() ) : ?>
                                <p>
  							                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small' ); ?></a>
                                </p>
                              <?php else :?>
                                <div class="blockimage"><img src="http://digest.thefarmersdog.com/wp-content/uploads/2018/01/300x270x,40jenikrauze-pet-food-labels-300x270.jpg.pagespeed.ic.7u-7D2L2bN.jpg" /></div>

                            <?php endif; ?>

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                  </div><!-- fin div row -->
                </div><!-- col is-right-sm-5-->
        <?php }?>

        <?php $i++; ?>

        <?php
    				endwhile;
            // fin de boucle
    				endif;
    				// 4. On réinitialise à la requête principale (important)
    				wp_reset_postdata();
    		 ?>

			</div><!-- row -->

</div><!-- container -->
