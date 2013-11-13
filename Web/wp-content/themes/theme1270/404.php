<?php get_header(); ?>

   <div id="content-box">
      <div id="indent">
         <div class="wrapper">

            <div id="error404" class="clearfix">
            <div class="error404-num grid_16">404</div>
             <div class="grid_8">
               <hgroup>
                 <h1>Sorry!</h1>
                 <h2>Page Not Found</h2>
               </hgroup>
               <h6>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</h6>
               <p>Please try using our search box below to look for information on the internet. </p>
               <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
             </div>
            </div><!--#error404 .post-->

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