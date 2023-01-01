<?php

get_header();
/*
Template Name:Testmonial

*/

?>


<div class="contentBox">
    	<div class="innerBox">
            <div class="left-side">
        	

        <?php 

            $query = new WP_Query(array(
                'post_type' => 'testmonial',
                'posts_per_page' => 5,



            ));

            while($query->have_posts()):$query->the_post();?>
            <h3><?php the_title();?></h3>
            <p><?php echo get_post_meta(get_the_id(), 'designation', true);?></p>
            <p><?php the_post_thumbnail(); ?></p>            
            <p><?php echo get_post_meta(get_the_id(), 'description', true);?></p>

            </div>


        <?php endwhile; wp_reset_postdata();?>

        

        <div class="right-side">
            <?php dynamic_sidebar('right-sidebar');?>
        </div>




        </div>
    </div>

    <?php get_footer();?>