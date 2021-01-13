<div class="card text-center  my-2">
    <div class="row" style="height: 18rem;"> <?php
        if ($counter % 2 == 0) { ?>
            <div class="col-5">
                <div class="card-body">
                    <div class="card-text"><?php echo get_the_date(); ?></div>
                    <div class="card-text"><?php get_the_terms_of_post('category-recipe'); ?></div>
                    <div class="card-text"><?php get_the_category(); ?></div>
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <div class="card-text"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read More</a>
                </div>
            </div>
            <div class="col-7">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img img-fluid', 'alt' => '']); ?>
            </div>
        <?php
        } else {  ?>
            <div class="col-7">
                <!-- <img src="..." class="card-img" alt="...">   -->
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img img-fluid', 'alt' => '']); ?>
            </div>
            <div class="col-5">
                <div class="card-body">
                    <div class="card-text"><?php echo get_the_date(); ?></div>
                    <div class="card-text"><?php get_the_terms_of_post('category-recipe'); ?></div>
                    <div class="card-text"><?php get_the_category(); ?></div>
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <div class="card-text"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?> " class="btn btn-dark">Read More</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>