<?php
/**
 * Template Name: Charity
 */

get_header(); ?>

   <div id="content-box">
      <div class="line-ver">
         <div id="indent">
            <div class="wrapper">

               <div id="content">
                 
                  <h1><b><?php the_title(); ?></b></h1>
                 
						<?php $wp_query = new WP_Query('post_type=testi&posts_per_page=4&paged='.$paged ); ?>
						<?php while ($wp_query->have_posts()) :$wp_query->the_post(); ?>
                   <article class="post">
                       <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <div class="wrapper">
                           <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>
                           <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,48);?></div>
                        </div>
                       <div class="link"><a href="<?php the_permalink() ?>">Read More</a></div>
                   </article>
                  <?php endwhile; ?>
                  
					  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                   <nav class="oldernewer">
                     <div class="older">
                       <?php next_posts_link('&laquo; Older Entries') ?>
                     </div><!--.older-->
                     <div class="newer">
                       <?php previous_posts_link('Newer Entries &raquo;') ?>
                     </div><!--.newer-->
                   </nav><!--.oldernewer-->
                 <?php endif; ?>
               
               </div><!--#content-->
               
               <?php get_sidebar(); ?>

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
