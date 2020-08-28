<?php
/*
Template Name: Name of The Template
Template Post Type: elementor_library
*/

// "Template Name refers" to the name of the template.
// "Template Post Type" is for if you want to use the template for specific post type. Ignore this line if you want it to be global. In this case it is "elementor_library"

get_header(); // Use get header function to include header files. Without it there will be errors.
?>

<footer class="class"> <!-- Html Markups Per Your Design. The examplr is for for Footer Template -->

<?php
// Loop through in to the posts just like index or single.php
if (have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
?>

</footer>

<?php

get_footer(); // Use get footer function to include footer files. Without it there will be errors.
