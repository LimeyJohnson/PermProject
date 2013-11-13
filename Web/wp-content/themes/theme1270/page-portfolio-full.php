<?php
/**
 * Template Name: Gallery Full
 */

get_header(); ?>

   <div id="content-box">
      <div id="indent">
         <div class="wrapper">

				<?php include_once (TEMPLATEPATH . '/title.php');?>   
            <?php global $more;	$more = 0;?>
            <?php $wp_query = new WP_Query(); ?>
            <?php $wp_query->query("post_type=portfolio&paged=".$paged.'&showposts=9'); ?>
            <?php get_template_part( 'loop', 'portfolio' );?>

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
