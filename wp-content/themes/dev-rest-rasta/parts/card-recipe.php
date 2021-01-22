<?php if (have_posts()) : ?>
    <div class="row mt-5">
        <?php
        global $counter;
        $counter = 0;
        while (have_posts()) : the_post(); ?>
            <?php
            $counter++;
            ?><div class="card text-center postRecipe">
                <div class="row no-gutters align-items-center">
                    <?php if ($counter % 2 == 0) { ?>
                        <div class="col-sm-12 col-md-12 col-lg-7 order-lg-2">
                            <?php $image = get_field('image');
                            $size = 'archive-recipe-img';
                            if ($image) { ?>
                                <img class="card-img postRecipe__image" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="recipe dish">
                            <?php
                            } ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 order-lg-1">
                            <div class="card-body postRecipeBody ">
                                <div class="card-text postRecipeBody__date"><img class="postRecipeBody__date-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/clock.svg" alt="clock"> <?php echo get_the_date(); ?></div>
                                <div class="card-text postRecipeBody__terms"><?php the_terms(get_the_ID(), 'category-recipe', '<img class="navTaxonomy__before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt="cutelry">', ''); ?></div>
                                <h5 class="card-title postRecipeBody__title"><?php the_title(); ?></h5>
                                <div class="card-text postRecipeBody__text"><?php echo archive_custom_excerpt(get_field('description')); ?></div>
                                <a href="<?php the_permalink(); ?> " class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    <?php } else {  ?>
                        <div class="col-sm-12 col-md-12 col-lg-7 order-lg-1">
                            <?php $image = get_field('image');
                            $size = 'archive-recipe-img';
                            if ($image) { ?>
                                <img class="card-img postRecipe__image" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="recipe dish">
                            <?php
                            } ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 order-lg-2">
                            <div class="card-body postRecipeBody ">
                                <div class="card-text postRecipeBody__date"><img class="postRecipeBody__date-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/clock.svg" alt="clock"> <?php echo get_the_date(); ?></div>
                                <div class="card-text postRecipeBody__terms"><?php the_terms(get_the_ID(), 'category-recipe', '<img class="navTaxonomy__before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt="cutelry">', ''); ?></div>
                                <h5 class="card-title postRecipeBody__title"><?php the_title(); ?></h5>
                                <div class="card-text postRecipeBody__text"><?php echo archive_custom_excerpt(get_field('description')); ?></div>
                                <a href="<?php the_permalink(); ?> " class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php endwhile ?>
        <?php get_template_part('options/pagination'); ?>
    </div>
<?php else : ?>
    <h1>There is no recipe for the moment.</h1>
<?php endif; ?>