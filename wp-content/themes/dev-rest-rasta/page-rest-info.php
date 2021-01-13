<!-- page-rest-info -->

<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>

        

        
    	<?= get_field('phone_number'); ?>
        <br>
        <?= get_field('street_and_number'); ?>
        <br>
        <?= get_field('postcode_and_city'); ?>
        <br>
        <?= get_field('country'); ?>
        <br>

        <!-- recup sub_field of Opening -->

        <?php if( have_rows('opening') ) :  while( have_rows('opening') ) : the_row(); ?>

            <?= the_sub_field('opening_days'); ?>
            <?= the_sub_field('opening_hours'); ?> <br>

        <?php endwhile; endif; ?>


<?php endwhile; endif; ?>