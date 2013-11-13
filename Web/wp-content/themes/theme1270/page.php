<?php get_header(); ?>

   <div id="content-box">
      <div id="indent">
         <div class="wrapper">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
             <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
               <article>
                 <h1><?php the_title(); ?></h1>
           
                 <div id="page-content">
                   <?php the_content(); ?>
                   <div class="pagination">
                     <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
                   </div><!--.pagination-->
                 </div><!--#pageContent -->
               </article>
             </div><!--#post-# .post-->
         
           <?php endwhile; ?>

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
