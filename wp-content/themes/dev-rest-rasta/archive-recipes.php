<?php get_header(); ?>
<section class="archive-recipe">
    <div class="container">
        <?php $cat_recipes =  get_terms(['taxonomy' => 'category-recipe']); ?>
        <?php if (is_array($cat_recipes)) : ?>
            <ul class="nav my-4">
                <?php foreach ($cat_recipes as $cat_recipe) : ?>
                    <li class="nav-item">
                        <a href="<?= get_term_link($cat_recipe); ?>" class="nav-link nav-taxonomy <?php echo is_tax('category-recipe', $cat_recipe->term_id) ? ' active' : '' ?>"><img class="terms-before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt=""><?= $cat_recipe->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- <div class="nav-taxonomy">
        <?php wp_list_categories([
            'taxonomy' => 'category-recipe',
            'show_option_all' => 'All The Recipes',
            'orderby' => 'date',
            'title_li' => '',
            'style' => 'nav',
            'separator' => ''
        ]); ?>
    </div> -->
        <?php get_template_part('parts/card-recipe'); ?>
    </div>


</section>

<?php get_footer(); ?>