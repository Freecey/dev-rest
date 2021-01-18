<?php get_header(); ?>


<div class="container container-singleRecipe">

   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="navSingle">
            <a href="" class="navSingle__return">Return</a>
            <div class="navSingle__separator">|</div>
            <p class="navSingle__date"><?php the_date(); ?></p>
            <p class="navSingle__term"><?php the_terms(get_the_ID(), 'category-recipe'); ?></p>
         </div>
         <h2 class="titleRecipe"><?php the_title(); ?></h2>
         <p class="descRecipe"> <?php the_field('description'); ?></p>
         <?php
         $image = get_field('image');
         $size = 'archive-recipe-img';
         if ($image) { ?>
            <img class="card-img" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="">
         <?php
         } ?>
         <h3 class="subtitlesRecipe">Ingredients</h3>
         <p><?php echo get_field('ingredients'); ?></p>
         <h3 class="subtitlesRecipe">Instructions</h3>
         <?php
         $steps_count = 0;
         if (have_rows('preparation')) :
            while (have_rows('preparation')) : the_row(); ?>
               <?php $steps_count++; ?>
               <div class="steps">
                  <p><span class="stepCounter"><?php echo $steps_count; ?></span><?php the_sub_field('steps'); ?></p>
               </div>
         <?php endwhile;
         else :
         // no rows found
         endif; ?>
   <?php endwhile;
   endif; ?>
</div>



<?php get_footer(); ?>