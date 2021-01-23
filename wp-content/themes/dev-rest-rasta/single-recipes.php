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
               <div class="navSingle__term navSingle__link"><?php the_terms(get_the_ID(), 'category-recipe', '<img class="navTaxonomy__before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry-white.svg" alt="cutelry">', ''); ?></div>
            </div>
            <h1 class="topContainer__titleRecipe"><?php the_title(); ?></h1>
            <div class="topContainer__descRecipe"><?php echo get_field('description'); ?></div>
         </div>
         <?php
         $image = get_field('image');
         $size = 'archive-recipe-img';
         if ($image) { ?>
            <img class="imgSingleRecipe" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="<?php the_title(); ?>">
         <?php
         } ?>
         <div class="mainContainer">
            <div class="networkSingleRecipe">
            <?php
$args = array('page_id' => '224' );
$query = new WP_Query($args);
if ($query->have_posts()) : while ($query->have_posts()) :
    $query->the_post();
                if (have_rows('infos_footer')) :
                    while (have_rows('infos_footer')) : the_row();
                        if (have_rows('social_link')) : while (have_rows('social_link')) : the_row(); ?>
                            <div class="network-icon btn">
                                <a href="<?= get_sub_field('facebook') ; ?>"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/facebook.svg" alt="facebook"></a>
                            </div>
                            <div class="network-icon btn">
                                <a href="<?= get_sub_field('twitter') ; ?>"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/twitter.svg" alt="twitter"></a>
                            </div>
                            <div class="network-icon btn">
                                <a href="<?= get_sub_field('instagram') ; ?>"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/instagram.svg" alt="instagram"></a>
                            </div>
                            <div class="network-icon btn">
                                <a href="<?= get_sub_field('linkedin') ; ?>"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/linkedin.svg" alt="linkedin"></a>
                            </div>
                        <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
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
                        <img class="imgSingleRecipe" src="<?php echo $image['sizes']["step-recipe-img"]; ?>" alt="Recipe Step">
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