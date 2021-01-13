<?php get_header(); ?>

Single recipe

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <img class="w-100" src="<?php the_post_thumbnail_url(); ?> " alt="">
        <?php the_content(); ?>
        </div>
        <?php
        //wp_reset_postdata > avoid to change the value of post
        wp_reset_postdata(); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>