<?php get_header(); ?>
<?php get_template_part('parts/top-banner-single-recipes');?>
<section class="singleRecipe">
<div class="container containerSingleRecipe col-sm-12 col-md-10 col-lg-7">
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="topContainer">
            <div class="navSingle">
               <a href="<?php echo get_post_type_archive_link('recipes'); ?>" class="navSingle__return"><span>&#8592;</span> Return</a>
               <div class="navSingle__separator">|</div>
               <p class="navSingle__date"><?php the_date(); ?></p>
               <div class="navSingle__term navSingle__link"><?php the_terms(get_the_ID(), 'category-recipe', '<img class="navTaxonomy__before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry-white.svg" alt="">', ''); ?></div>
            </div>
            <h2 class="topContainer__titleRecipe"><?php the_title(); ?></h2>
            <div class="topContainer__descRecipe"><?php echo get_field('description'); ?></div>
         </div>
         <?php
         $image = get_field('image');
         $size = 'archive-recipe-img';
         if ($image) { ?>
            <img class="imgSingleRecipe" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="">
         <?php
         } ?>
         <div class="mainContainer">
            <div class="networkSingleRecipe">
               <div class="network-icon btn">
                  <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/facebook.svg" alt=""></a>
               </div>
               <div class="network-icon btn">
                  <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/twitter.svg" alt=""></a>
               </div>
               <div class="network-icon btn">
                  <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/instagram.svg" alt=""></a>
               </div>
               <div class="network-icon btn">
                  <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/linkedin.svg" alt=""></a>
               </div>
            </div>
            <div class="sectionIngredients">
               <h3 class="subtitlesRecipe">Ingredients</h3>
               <div class="additional-info"><?php the_field('infos_recipe'); ?></div>
               <div><?php echo get_field('ingredients'); ?></div>
            </div>
            <div class="sectionPreparation">
               <h3 class="subtitlesRecipe">Instructions</h3>
               <?php
               $steps_count = 0;
               if (have_rows('preparation')) :
                  while (have_rows('preparation')) : the_row(); ?>
                     <?php $steps_count++; ?>
                     <div class="steps">
                        <div class="steps__counter"><?php echo $steps_count; ?></div>
                        <div class="steps__text"><?php the_sub_field('steps'); ?></div>
                     </div>
                     <?php $image = get_sub_field('step_illustration');
                     if ($image) { ?>
                        <img class="imgSingleRecipe" src="<?php echo $image['sizes']["step-recipe-img"]; ?>" alt="">
                     <?php
                     }; ?>
               <?php endwhile;
               else :
               // no rows found
               endif; ?>
            </div>
         </div>
   <?php endwhile;
   endif; ?>
</div>
</section>

<?php get_template_part('parts/latest-updates-recipes'); ?>

<?php get_footer(); ?>