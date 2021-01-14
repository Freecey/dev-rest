<?php get_header(); ?>

<div class="container archive-recipe">
    <?php $cat_recipes =  get_terms(['taxonomy' => 'category-recipe']); ?>
    <?php if (is_array($cat_recipes)) : ?>
        <ul class="nav my-4">
            <?php foreach ($cat_recipes as $cat_recipe) : ?>
                <li class="nav-item">
                    <a href="<?= get_term_link($cat_recipe); ?>" class="nav-link nav-taxonomy <?php echo is_tax('category-recipe', $cat_recipe->term_id) ? ' active' : '' ?>"><?= $cat_recipe->name ?></a>
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

<?php get_footer(); ?>