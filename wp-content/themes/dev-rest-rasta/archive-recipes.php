<?php get_header(); ?>

<?php $cat_recipes =  get_terms(['taxonomy' => 'category-recipe']); ?>
<?php if (is_array($cat_recipes)) : ?>
    <ul class="nav nav-pills my-4">
        <?php foreach ($cat_recipes as $cat_recipe) : ?>
            <li class="nav-item">
                <!-- !!!!!!!! link doesn't work !!!!!!!!!!!!! -->
                <a href="<?= get_term_link($cat_recipe); ?>" class="nav-link<?= is_tax('sport', $cat_recipe->term_id) ? ' active' : '' ?>"><?= $cat_recipe->name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if (have_posts()) : ?>
    <div class="row mt-5">
        <?php
        global $counter;
        $counter = 0;
        while (have_posts()) : the_post(); ?>
            <?php
            $counter++;
            ?><div class="card text-center mb-3">
                <div class="row" style="height: 22rem;">
                    <?php if ($counter % 2 == 0) { ?>
                        <div class="col-md-5">
                            <div class="card-body">
                                <div class="card-text text-secondary mb-3"><?php echo get_the_date(); ?></div>
                                <div class="card-text mb-3"><?php the_terms(get_the_ID(), 'category-recipe', '', ' '); ?></div>
                                <h5 class="card-title mb-4"><?php the_title(); ?></h5>
                                <div class="card-text mb-3"><?php the_excerpt(); ?></div>
                                                <!-- !!!!!!!! link doesn't work !!!!!!!!!!!!! -->
                                <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <!-- !!!!! problem with image sizes to adjust !!!!!!-->
                            <img src="<?php echo get_field('image'); ?>" class="card-img" style="height: 22rem; alt=" recipe presentation">
                        </div>
                    <?php } else {  ?>
                        <div class="col-sm-7">
                            <!-- !!!!! problem with image sizes to adjust !!!!!!-->
                            <img src="<?php echo get_field('image'); ?>" class="card-img img-fluid" style="height: 22rem; alt=" recipe presentation">
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <div class="card-text text-secondary mb-3"><?php echo get_the_date(); ?></div>
                                <div class="card-text mb-3"><?php the_terms(get_the_ID(), 'category-recipe', '', ' '); ?></div>
                                <h5 class="card-title mb-4"><?php the_title(); ?></h5>
                                <div class="card-text mb-3"><?php the_excerpt(); ?></div>
                                                <!-- !!!!!!!! link doesn't work !!!!!!!!!!!!! -->
                                <a href="<?php the_permalink(); ?> " class="btn btn-dark">Read More</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>There is no recipe for the moment.</h1>
<?php endif; ?>


<?php get_footer(); ?>