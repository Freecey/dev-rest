<?php if (have_posts()) : ?>
    <div class="row mt-5">
        <?php
        global $counter;
        $counter = 0;
        while (have_posts()) : the_post(); ?>
            <?php
            $counter++;
            ?><div class="card text-center post-recipe">
                <div class="row no-gutters align-items-center">
                    <?php if ($counter % 2 == 0) { ?>
                        <div class="col-sm-12 col-md-12 col-lg-7 order-lg-2">
                            <?php $image = get_field('image');
                            $size = 'archive-recipe-img';
                            if ($image) { ?>
                                <img class="card-img" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="">
                            <?php
                            } ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 order-lg-1">
                            <div class="card-body ">
                                <div class="card-text post-date mb-2"><img class="post-date-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/clock.svg" alt=""> <?php echo get_the_date(); ?></div>
                                <div class="card-text post-terms mb-2"><?php the_terms(get_the_ID(), 'category-recipe', '<img class="terms-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt="">', ''); ?></div>
                                <h5 class="card-title post-title mb-4"><?php the_title(); ?></h5>
                                <!-- <div class="card-text mb-4"><?php echo substr(get_field('description'), 0, 100); ?></div> -->
                                <div class="card-text mb-4"><?php echo archive_custom_excerpt(get_field('description')); ?></div>
                                <a href="<?php the_permalink(); ?> " class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    <?php } else {  ?>
                        <div class="col-sm-12 col-md-12 col-lg-7 order-lg-1">
                            <?php $image = get_field('image');
                            $size = 'archive-recipe-img';
                            if ($image) { ?>
                                <img class="card-img" src="<?php echo $image['sizes']["single-recipe-img"]; ?>" alt="">
                            <?php
                            } ?>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5 order-lg-2">
                            <div class="card-body ">
                                <div class="card-text post-date mb-2"><img class="post-date-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/clock.svg" alt=""><?php echo get_the_date(); ?></div>
                                <div class="card-text post-terms mb-2"><?php the_terms(get_the_ID(), 'category-recipe', '<img class="terms-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt="">', ''); ?></div>
                                <h5 class="card-title post-title mb-4"><?php the_title(); ?></h5>
                                <div class="card-text mb-4"><?php echo archive_custom_excerpt(get_field('description')); ?></div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
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