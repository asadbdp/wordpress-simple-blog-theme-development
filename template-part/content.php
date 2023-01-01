<div class="contentBox">
    	<div class="innerBox">
        	<?php while(have_posts()) : the_post() ?>
          <div class="contentTitle"><a href="<?php the_permalink();?>">		<?php the_title();?></a></div>
            <div class="contentText">
            	<?php if(is_single()):?>
            		<?php the_content();?>
            		<?php else: ?>

            	<?php
            		$read_more = '<p><a href="'.get_permalink().'">Read More</a></p>';
            		echo wp_trim_words(get_the_content(), 10, $read_more);
            	?>

				<?php endif; ?>  

				<!--<p><?php echo get_post_meta($post->ID, 'metatagone', true);?></p>-->                  
            </div>
        	<?php endwhile?>         
        </div>
    </div>