<?php get_header(); ?>

   <div id="content-box">
      <div class="line-ver">
         <div id="indent">
            <div class="wrapper">

<div id="content">
  <h1><b><?php printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></b></h1>
  <!-- displays the tag's description from the Wordpress admin -->
  <?php echo tag_description(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        	<div class="post-meta">
           <div class="align-right"><?php comments_popup_link('No comments', 'One comment', '% comments', 'comments-link', 'Comments are closed'); ?></div>
           <div class="align-left">Posted in: <?php the_category(', ') ?> | <time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('F j, Y'); ?> at <?php the_time() ?></time> , by <?php the_author_posts_link() ?></div>
         </div><!--.post-meta-->
			<div class="wrapper">
        		<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>
            <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,48);?></div>
         </div>
        <div class="link"><a href="<?php the_permalink() ?>">Read More</a></div>
    </article>
    
  <?php endwhile; else: ?>
    <div class="no-results">
      <p><strong>There has been an error.</strong></p>
      <p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
      <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
    </div><!--noResults-->
  <?php endif; ?>
    
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