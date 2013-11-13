			</div>
      </div>
   </div><!--.container-->
  
	<footer id="footer">
		<div class="container">
			<div class="wrapper">
         	
            <div class="footer-text">
					<?php $my_framework_footer_text = get_option('my_framework_footer_text'); ?>
               <?php if($my_framework_footer_text){?>
						<?php echo get_option('my_framework_footer_text'); ?>
               <?php } else { ?>
                  <p><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> &copy; <?php echo date("Y") ?> | <a href="?page_id=437">Privacy Policy</a></p>
               <?php } ?>
            </div>
        
				<?php if ( get_option('my_framework_footermenu') == 'true') { ?>  
               <nav class="footer">
                        <?php wp_nav_menu( array(
                    'container'       => 'ul', 
                    'menu_class'      => 'footer-nav', 
                    'depth'           => 0,
                    'theme_location' => 'footer_menu' 
                    )); 
                  ?>
               </nav>
            <?php } ?>
        
      	</div>
		</div><!--.container-->
	</footer>
   
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->

<?php echo stripslashes(get_option('my_framework_ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>