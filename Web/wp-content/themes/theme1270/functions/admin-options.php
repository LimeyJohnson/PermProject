<?php
	$themename = "Help Children";
	$shortname = "my_framework";
	
	
	
	
	//Theme options
	$options = array(
 
		array ( "name" => "Options",
					  "type" => "title" ),

		array ( "name" => "General",
						"type" => "section" ),
		array ( "type" => "open"),

		array ( "name" => "Logo URL",
						"desc" => "Enter the link to your logo image",
						"id" => $shortname . "_logo",
						"type" => "text",
						"std" => "" ),
		
		array ( "name" => "Display search box",
						"desc" => "Display search box in the header?",
						"id" => $shortname . "_searchbox",
						"type" => "checkbox",
						"std" => "" ),

		array ( "name" => "Custom CSS",
						"desc" => "Want to add any custom CSS code? Put in here, and the rest is taken care of. This overrides any other stylesheets. eg: a.button{color:green}",
						"id" => $shortname . "_custom_css",
						"type" => "textarea",
						"std" => "" ),

		array ( "type" => "close"),
		
		
		
		array ( "name" => "Main Navigation",
						"type" => "section" ),

		array ("type" => "open"),

		array ( "name" => "Delay",
						"desc" => "miliseconds delay on mouseout",
						"id" => $shortname . "_sf_delay",
						"type" => "text",
						"std" => "" ),
		
		array ( "name" => "Fade-in animation",
						"desc" => "fade-in animation",
						"id" => $shortname . "_sf_fade_in",
						"type" => "select",
						"options" => array ("show", "false"),
						"std" => "" ),
		
		array ( "name" => "Slide-down animation",
						"desc" => "slide-down animation",
						"id" => $shortname . "_sf_slide_down",
						"type" => "select",
						"options" => array ("show", "false"),
						"std" => "" ),
		
		array ( "name" => "Speed",
						"desc" => "animation speed",
						"id" => $shortname . "_sf_speed",
						"type" => "select",
						"options" => array ("slow", "normal", "fast"),
						"std" => "" ),
		
		array ( "name" => "Arrows markup",
						"desc" => "generation of arrow mark-up",
						"id" => $shortname . "_sf_arrows",
						"type" => "select",
						"options" => array ("false", "true"),
						"std" => "" ),
		
		array ( "name" => "Drop shadows",
						"desc" => "drop shadows (for submenu)",
						"id" => $shortname . "_sf_dropshadows",
						"type" => "select",
						"options" => array ("false", "true"),
						"std" => "false" ),
		

		array ( "type" => "close"),
		
		
		

		array ( "name" => "Footer",
						"type" => "section"),

		array ( "type" => "open"),

		array(  "name" => "Footer copyright text",
						"desc" => "Enter text used in the right side of the footer. It can be HTML",
						"id" => $shortname."_footer_text",
						"type" => "textarea",
						"std" => ""),

		array(  "name" => "Google Analytics Code",
						"desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
						"id" => $shortname."_ga_code",
						"type" => "textarea",
						"std" => ""),

		array(  "name" => "Feedburner URL",
						"desc" => "Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website",
						"id" => $shortname."_feedburner",
						"type" => "text",
						"std" => get_bloginfo('rss2_url')),
		
		array(  "name" => "Footer Menu",
						"desc" => "Enable footer menu",
						"id" => $shortname."_footermenu",
						"type" => "checkbox",
						"std" => ""),

		array( "type" => "close")

);