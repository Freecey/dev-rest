<?php get_header(); ?>

<?php get_template_part('parts/top-banner'); ?>
<img class="bgHatchingTop" src="/wp-content/themes/dev-rest-rasta/assets/images/hachures-grises.png" alt="">
<section class="archiveRecipe">
    <div class="container">
        <?php get_template_part('options/nav-archive-recipe'); ?>
        <?php get_template_part('parts/card-recipe'); ?>
    </div>
</section>
<img class="bgHatching" src="/wp-content/themes/dev-rest-rasta/assets/images/hachures-grises.png" alt="">
<?php get_template_part('parts/our-menu');?>

<?php get_footer(); ?>