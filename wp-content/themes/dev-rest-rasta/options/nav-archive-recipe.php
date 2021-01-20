<?php $cat_recipes =  get_terms(['taxonomy' => 'category-recipe']); ?>
<?php if (is_array($cat_recipes)) : ?>
    <ul class="navTaxonomy">
        <?php foreach ($cat_recipes as $cat_recipe) : ?>
            <li class="navTaxonomy__item">
                <a href="<?= get_term_link($cat_recipe); ?>" class="navTaxonomy__link <?= is_tax('category-recipe', $cat_recipe->term_id) ? ' navTaxonomy__link--active' : '' ?>"><img class="navTaxonomy__before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt=""><?= $cat_recipe->name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
