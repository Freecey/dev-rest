<?php get_header();?>

<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('parts/card-recipe'); ?>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>There is no recipe for the moment.</h1>
<?php endif; ?>

<?php get_footer();?>