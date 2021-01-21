<section class="latestRecipe">
    <h3 class="latestRecipe__subtitle">Latest updates</h3>
    <h2 class="latestRecipe__title">Recipes Blog</h2>
    <div class="container cardsContainer">
        <?php
        $args = array(
            'post_type' => 'recipes',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category-recipe',
                    'terms'    => 'all-recipes'
                ),
            ),
        );
        $query = new WP_Query($args);
        $i = 1; ?>
        <?php if ($query->have_posts()) :; ?>
            <?php while ($query->have_posts() && $i < 5) : $query->the_post(); ?>
                <?php $image = get_field('image'); ?>
                <?php $size = 'latest-recipes-img'; ?>
                <div class="latestCard">
                    <img src="<?php echo $image['sizes']["latest-recipes-img"]; ?>" class="latestCard__image" alt="...">
                    <div class="latestCard__body">
                        <div class="card-text latestCard__date"><img class="latestCard__date-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/clock.svg" alt=""> <?php echo get_the_date(); ?></div>
                        <h5 class="latestCard__title"><?php the_title(); ?></h5>
                        <div class="latestCard__text"><?php echo archive_custom_excerpt(get_field('description')); ?></div>
                        <div class="linkRow">
                            <div class="linkRow__before"></div>
                            <a href="<?php the_permalink(); ?>" class="linkRow__link">Read more</a>
                        </div>
                    </div>
                </div>
            <?php $i++;
            endwhile;
        else : ?>
        <?php endif; ?>
    </div>
    <img class="latestRecipe__bgHatching" src="/wp-content/themes/dev-rest-rasta/assets/images/hachures-grises.png" alt="">
</section>
<?php wp_reset_postdata(); ?>
