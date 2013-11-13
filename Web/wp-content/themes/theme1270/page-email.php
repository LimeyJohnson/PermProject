<?php
/**
 * Template Name: Email
 */

get_header(); ?>

   <div id="content-box">
      <div id="indent">
         <div class="wrapper">
            
            <?php if ( ! dynamic_sidebar( 'Newsletter Widget' ) ) : ?>
               <!-- Widgetized Header -->
            <?php endif ?>

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
