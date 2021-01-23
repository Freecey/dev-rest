<?php $cat_recipes =  get_terms(['taxonomy' => 'category-recipe']); ?>
<?php if (is_array($cat_recipes)) : ?>
    <ul class="navTaxonomy">
        <?php foreach ($cat_recipes as $cat_recipe) : ?>
            <li class="navTaxonomy__item">
                <div class="navLinkContainer">
                    <a href="<?= get_term_link($cat_recipe); ?>" class="navTaxonomy__link <?= is_tax('category-recipe', $cat_recipe->term_id) ? ' navTaxonomy__link--active' : '' ?>"><img class="navTaxonomy__before" src="/wp-content/themes/dev-rest-rasta/assets/svg/cutelry.svg" alt="cutelry"><?= $cat_recipe->name ?></a>
                    <div class="navTaxonomy__underline"></div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>