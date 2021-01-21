<?php
$args = array(
    'page_id' => '504'
);
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        // Contents of the queried post results go here.
        ?>
    <?php
    if (have_rows('banner_top')) :
      while (have_rows('banner_top')) : the_row();
      $bannertop_img = get_sub_field('banner_image');
    ?>

<div class="heroBanner banner-top banner-top-s-rest" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' <?= $bannertop_img['url']; ?> ');">
    <div class="container heroBanner__inside">
        <h2 class="heroBanner__subTitle"><?= get_sub_field('subtitle'); ?></h2>
        <h1 class="heroBanner__title"><?= get_sub_field('main_title'); ?></h1>
        <div class="heroBanner__linkRow">
            <div class="heroBanner__linkRow--before lineBefore"></div>
            <?php $banlink = get_sub_field('banner_link'); ?>
            <a class="heroBanner__linkRow--link linkOur" href="<?= $banlink['url']; ?>"><?= $banlink['title']; ?></a>
        </div>
    </div>
</div>


<?php

      endwhile; 
    else :
    // no rows found
    endif; ?>

<?php
}
 
}
 
// Restore original post data.
wp_reset_postdata();
 
?>