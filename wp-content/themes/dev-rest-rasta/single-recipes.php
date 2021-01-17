<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <img class="w-100" src="<?php echo get_field('image'); ?> " alt="">
        <?php the_content(); ?>
        </div>
        <?php
        //wp_reset_postdata > avoid to change the value of post
        wp_reset_postdata(); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>