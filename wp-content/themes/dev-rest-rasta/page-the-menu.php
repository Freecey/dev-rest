<!-- page-the-menu.php -->
<?php get_header(); ?>

<!-- START BANNER TOP -->
<?php
if (have_rows('banner_top')) :
  while (have_rows('banner_top')) : the_row();
    $bannertop_img = get_sub_field('banner_image');
?>
    <section class="banner-top banner-top-s-rest" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' <?= $bannertop_img['url']; ?> ');">
      <div class="cont-banner">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
          <div class="font-subtitle-top"><?= get_sub_field('subtitle'); ?></div>
          <div><h1 class="font-title-top"><?= get_sub_field('main_title'); ?></h1></div>
          <div class="banner-link banner-link-menu">
            <div class="link-barre"></div>
            <div class="link-text">
              <?php $banlink = get_sub_field('banner_link'); ?>
              <a class="banner-link-a" href="<?= $banlink['url']; ?>" class=""><?= $banlink['title']; ?></a>
            </div>
          </div>
        </div>

      </div>

    </section>

    <div class="banner-top-hash mt-n5"></div>
<?php
  endwhile;
else :
// no rows found
endif; ?>
<!-- END BANNER TOP -->


<section class="rows">
  <div class="text-center page-subtitles my-4">Welcome</div>

  <div class="text-center page-title"><?php the_title(); ?></div>


  <div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto menu-w">

    <?php

    if (have_rows('menu_sections')) :
      // loop through the rows of data
      while (have_rows('menu_sections')) : the_row();
        // display a sub field value
    ?>
        <div class="flex-menu-section">
          <div class="flex-menu-section-items">
            <h2><?= get_sub_field('section_title'); ?><h2>
          </div>
        </div>

        <?php
        if (have_rows('sections_items')); ?>

        <?php while (have_rows('section_items')) : the_row(); ?>

          <?php if (get_sub_field('chef_selection')) :  ?>
            <div class="chef-select-label">CHEF SELECTION</div>
            <div class="chef-select-cont">
            <?php endif; ?>


            <div class="container-dish">
              <div class="flex-menu-dish">
                <div class="flex-menu-dish-items"><?php the_sub_field('dish_name'); ?></div>
                <div class="flex-menu-dish-items"></div>
                <div class="flex-menu-dish-items"><?php the_sub_field('dish_price'); ?>€</div>
              </div>
              <div class="flex-menu-dish-down">
                <div class="flex-menu-dish-items-down"><?php the_sub_field('dish_description'); ?></div>
                <div class="flex-menu-dish-items-down"></div>
              </div>
            </div>
            <?php if (get_sub_field('chef_selection')) :  ?>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>
  </div>
</section>
<div class="sect-space"></div>
<!-- ADD HERE LAST RECIPES PART -->
<?php get_template_part('parts/latest-updates-recipes'); ?>

<?php get_footer(); ?>