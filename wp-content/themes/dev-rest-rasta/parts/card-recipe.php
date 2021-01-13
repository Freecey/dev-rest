<div class="card">
    <div class="row">
        <div class="col-7">
            <!-- <img src="..." class="card-img" alt="...">   -->
            <?php the_post_thumbnail('recipe-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']); ?>
        </div>
        <div class="col-5">
            <div class="card-body">
                <div class="card-text"><?php get_the_terms_of_post('category-recipe');?></div>
                <div class="card-text"><?php get_the_category(); ?></div>
                <h5 class="card-title"><?php the_title(); ?></h5>
                <div class="card-text"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?> " class="btn btn-dark">Read More</a>
            </div>
        </div>
    </div>
</div>