<!-- page-the-menu.php -->
<?php get_header(); ?>

<h2>The menu</h2>






<div class="rows">
  <div class="col-8 mx-auto">

<?php

if (have_rows('menu_sections')) :
  // loop through the rows of data
  while (have_rows('menu_sections')) : the_row();
    // display a sub field value
?>
    <div class="flex-menu-section">
      <div class="flex-menu-section-items"><h2><?= get_sub_field('section_title'); ?><h2></div>
    </div>
 
    <?php
    if (have_rows('sections_items')); ?>

    <?php while (have_rows('section_items')) : the_row(); ?>
      <div class="container">
        <div class="flex-menu-dish">
          <div class="flex-menu-dish-items"><?php the_sub_field('dish_name'); ?></div>
          <div class="flex-menu-dish-items"></div>
          <div class="flex-menu-dish-items"><?php the_sub_field('dish_price'); ?> €</div>
        </div>
        <div class="flex-menu-dish-down">
          <div class="flex-menu-dish-items-down"><?php the_sub_field('dish_description'); ?></div>
          <div class="flex-menu-dish-items-down"></div>
        </div>

      </div>
    <?php endwhile; ?>
<?php
  endwhile;
else :
// no rows found
endif; ?>
</div>
</div>