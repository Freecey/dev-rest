<!-- The Restaurant -->
<?php get_header(); ?>

<div class="rows ">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php if (have_rows('restaurant_banner_presentation')) : ?>

                <?php while (have_rows('restaurant_banner_presentation')) : the_row(); ?>

                    <div class="text-center page-subtitles my-4"><?php the_sub_field('banner_presentation_subtitle'); ?></div>
                    <div class="text-center page-title"><?php the_sub_field('banner_presentation_title'); ?></div>



            <?php endwhile;
            endif; ?>


            <?php if (have_rows('restaurant_presentation')) : ?>

                <?php while (have_rows('restaurant_presentation')) : the_row(); ?>

                    <?php
                    $row_i = get_row_index();
                    $rest_prez_img = get_sub_field('restaurant_presentation_block_image_');
                    //var_dump($rest_prez_img);
                    //var_dump($rest_prez_img['sizes']["rest700"]);
                    ?>

                    <?php if ($row_i % 2 == 0) : ?>

                        <div class="card mb-3 mx-auto" style="max-width: 1080px;">
                            <div class="row no-gutters">

                                <div class="col-lg-6 order-2 order-md-2 order-lg-1 my-auto">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php the_sub_field('restaurant_presentation_block_subtitle'); ?> </h5>
                                        <h5 class="card-title"><?php the_sub_field('restaurant_presentation_block_title'); ?> </h5>
                                        <p class="card-text"><?php the_sub_field('restaurant_presentation_block_wysiwig'); ?> </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-md-1 order-lg-2">
                                    <img src="<?php echo $rest_prez_img['sizes']["rest700"]; ?>" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>

                    <?php else :  ?>
                        <div class="card mb-3 mx-auto" style="max-width: 1080px;">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <img src="<?php echo $rest_prez_img['sizes']["rest700"]; ?>" class="card-img" alt="...">
                                </div>
                                <div class="col-lg-6 my-auto">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php the_sub_field('restaurant_presentation_block_subtitle'); ?> </h5>
                                        <h5 class="card-title"><?php the_sub_field('restaurant_presentation_block_title'); ?> </h5>
                                        <p class="card-text"><?php the_sub_field('restaurant_presentation_block_wysiwig'); ?> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
            <?php endwhile;
            endif; ?>


            <?php if (have_rows('restaurant_location')) : ?>

                <?php while (have_rows('restaurant_location')) : the_row(); ?>

                    <div class="text-center page-subtitles my-4"><?php the_sub_field('restaurant_location_subtitle'); ?></div>
                    <div class="text-center page-title"><?php the_sub_field('restaurant_location_title'); ?></div>


                    <?php
                    get_template_part('template-parts/content', get_post_format());

                    $location = get_sub_field('restaurant_location_map');

                    if (!empty($location)) :
                    ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>


            <?php endwhile;
            endif; ?>


            <?php if (have_rows('restaurant_reservation')) : ?>

                <?php while (have_rows('restaurant_reservation')) : the_row();
                    $rest_prez_img = get_sub_field('restaurant_reservation_image'); ?>


<div class="text-center page-subtitles my-4"><?php the_sub_field('restaurant_reservation_subtitle'); ?></div>
                    <div class="text-center page-title"><?php the_sub_field('restaurant_reservation_title'); ?></div>

<div class="col-lg-6">
                    <img src="<?php echo $rest_prez_img['sizes']["rest700"]; ?>" class="card-img" alt="...">
</div>



            <?php endwhile;
            endif; ?>

    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>


<!-- restaurant_banner_presentation
    banner_presentation_title
    banner_presentation_subtitle -->