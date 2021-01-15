<!-- page-the-menu.php -->
<?php get_header(); ?>

<div class="rows">
<div class="text-center page-subtitles my-4">Welcome</div>

<div class="text-center page-title"><?php the_title(); ?></div>


  <div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto">

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
</div>

<!-- ADD HERE LAST RECIPES PART -->


<?php get_footer(); ?>
