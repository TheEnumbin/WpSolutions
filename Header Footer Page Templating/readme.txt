*****************
Author: Enumbin *
Date: 20/8/2020 *
V: 1.0.0        *
*****************

Paths & Configs
===============

1/ Put The template files in the "templates" folder in your theme directory.

	Example: wp-content/themes/your-theme-name/templates/

2/ Use prefix "template-" for the files. 
	
	Example: template-filename.php


In Template Files
=================

1/ Start the template file with The code Snippet below

	<?php
	/*
	Template Name: Name of The Template
	*/

	A global template file for all the post types has been created.

2/ If you want the template file for specifix post types. Do like below.
   In our case which is "elementor_library", post type for elementor templates.

	<?php
	/*
	Template Name: Name of The Template
	Template Post Type: elementor_library
	*/

3/ Use get_header(); after the template declaration.

4/ Justr like index.php or single.php you need to loop through the posts and show the content

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	}
	
5/ Use get_footer(); at the end of the file.

BOOOM!!!!!! You hav created your template files.
Go to the files to understand clearly.

Thank You
Enumbin
enumbin@gmail.com
Dhaka, Bangladesh

