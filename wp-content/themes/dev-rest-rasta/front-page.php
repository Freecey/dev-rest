<!-- front-page.php -->
<?php get_header(); ?>







<!-- START BANNER TOP -->
    <?php
    if (have_rows('banner_top')) :
      while (have_rows('banner_top')) : the_row();
      $bannertop_img = get_sub_field('banner_image');
    ?>
        
        <?= get_sub_field('subtitle'); ?> <br>
        <?= get_sub_field('main_title'); ?> <br>
        <?= $bannertop_img['url']; ?> <br>
        

    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>
<!-- END BANNER TOP -->


<!-- START INTRO -->
<?php
    if (have_rows('intro')) :
      while (have_rows('intro')) : the_row();
      $intro_img = get_sub_field('intro_image');
    ?>
        
        <?= get_sub_field('title'); ?> <br>
        <?= get_sub_field('subtitle'); ?> <br>
        <?= get_sub_field('subtitle_2'); ?> <br>
        <?= get_sub_field('text'); ?> <br>
        <?php if (have_rows('signature')) : while (have_rows('signature')) : the_row(); ?>
        <?= get_sub_field('subtitle'); ?> <br>
        <?= get_sub_field('title'); ?> <br>
        <?php endwhile; endif; ?>
        
        <?= $intro_img['sizes']["rest700"]; ?> <br>
    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>
<!-- END INTRO -->
  
<!-- ADD HERE RESTAURANTS PART -->

<!-- START OUR MENU -->
<?php
    if (have_rows('our_menu')) :
      while (have_rows('our_menu')) : the_row();
    ?>
        
        <?= get_sub_field('subtitle'); ?> <br>
        <?= get_sub_field('title'); ?> <br>
        <?= get_sub_field('text'); ?> <br>
        <?= get_sub_field('images'); // RAND 4 IMAGE?> <br>
        

    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>
<!-- END OUR MENU -->

<!-- START BANNER TOP -->
<?php
    if (have_rows('testimony')) :
      while (have_rows('testimony')) : the_row();
      $testimony_img = get_sub_field('image');
    ?>
        123
        <?= get_sub_field('name'); ?> <br>
        <?= get_sub_field('text'); ?> <br>
        <?= $testimony_img['url']; ?> <br>
        

    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>
<!-- END BANNER TOP -->


<!-- ADD HERE LAST RECIPES PART -->


<?php get_footer(); ?>


<?php get_footer(); ?>