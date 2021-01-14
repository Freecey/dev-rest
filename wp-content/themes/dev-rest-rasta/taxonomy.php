<?php get_header(); ?>

<?php $cat_recipes =  get_terms(['taxonomy' => 'category-recipe']); ?>
<?php if (is_array($cat_recipes)) : ?>
    <ul class="nav nav-pills my-4">
        <?php foreach ($cat_recipes as $cat_recipe) : ?>
            <li class="nav-item ">
                <a href="<?= get_term_link($cat_recipe); ?>" class="nav-link nav-taxonomy<?= is_tax('category-recipe', $cat_recipe->term_id) ? ' active' : '' ?>"><?= $cat_recipe->name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php get_template_part('parts/card-recipe');?>

<?php get_footer(); ?>