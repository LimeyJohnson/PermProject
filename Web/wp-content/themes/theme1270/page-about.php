<?php
/*
 * Template Name: About us
 */

get_header(); ?>
	
   <div class="custom-post">
      <?php $loop = new WP_Query(array('post_type' => 'custom', 'posts_per_page' => 5)); ?>
         <ul>
            <?php if ($loop->have_posts()): ?>
            <?php $posts_counter = 0; ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); $posts_counter++; ?>
            <li id="custom-<?php echo $posts_counter; ?>">
               <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?></a>
            </li>
            <?php endwhile; ?>
         </ul>
      <?php endif; ?>
   </div>
   
   <div id="content-box">
   	
      <div class="line-ver-1">
      	<div class="line-ver-2">
            <div id="indent">
               <div class="wrapper">
               	
                  <div class="col-1">
							<?php if ( ! dynamic_sidebar( 'Content Widget 1' ) ) : ?>
                        <!-- Widgetized Header -->
                     <?php endif ?>
                  </div>
                  
                  <div class="col-2">
							<?php if ( ! dynamic_sidebar( 'Content Widget 2' ) ) : ?>
                        <!-- Widgetized Header -->
                     <?php endif ?>
                  </div>
                                                 
               </div>
            </div>
         </div>
      </div>
      
      <div class="social">
      	<div class="inner">
         	<div class="wrapper">
					<?php if ( ! dynamic_sidebar( 'Social Widget' ) ) : ?>
                  <!-- Widgetized Header -->
               <?php endif ?>
            </div>
         </div>
      </div>
      
   </div>

<?php get_footer(); ?>
