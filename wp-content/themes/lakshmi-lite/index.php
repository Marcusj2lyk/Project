<?php
/**
 * The main template file.
 *
 */

get_header(); ?>
                    
	<?php
    /* Run the loop to output the posts.
    * If you want to overload this in a child theme then include a file
    * called loop-index.php and that will be used instead.
    */
    
    get_template_part( 'loop', 'index' );
    ?>
    <div class="clear"></div><!-- clear float --> 
                 	
<?php get_footer(); ?>