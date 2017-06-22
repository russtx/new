<?php get_header(); ?>
	<!-- section -->
	<section>
    <h2><?php the_field('header_content'); ?></h2>
    <?php

    // check if the flexible content field has rows of data
    if( have_rows('flexible_field') ):

         // loop through the rows of data
        while ( have_rows('flexible_field') ) : the_row();

            if( get_row_layout() == 'paragraph' ):

            	the_sub_field('leftside');
              the_sub_field('right_side');
            elseif( get_row_layout() == 'download' ):

            	$file = get_sub_field('file');

            endif;

        endwhile;

    else :

        // no layouts found

    endif;

    ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>
