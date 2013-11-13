<?php
/**
 * Template Name: Search
 */

get_header(); ?>

   <div id="content-box">
      <div class="line-ver">
         <div id="indent">
            <div class="wrapper">

               <div id="content">
                 
                  <h1><b><?php the_title(); ?></b></h1>
                  <form method="get" id="searchform" action="<?php echo get_option('home'); ?>/">
                    <input type="text" name="s"><input type="submit" value="GO">
                  </form>
               
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
