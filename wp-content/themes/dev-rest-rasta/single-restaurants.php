<!-- The Restaurant -->
<?php get_header(); ?>

<!-- START BANNER TOP -->
<?php
if (have_rows('banner_top')) :
    while (have_rows('banner_top')) : the_row();
        $bannertop_img = get_sub_field('banner_image');
?>
        <section class="banner-top banner-top-s-rest" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' <?= $bannertop_img['url']; ?> ');">
            <div class="cont-banner">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="font-subtitle-top"><?= get_sub_field('subtitle'); ?></div>
                    <div class="font-title-top"><?= get_sub_field('main_title'); ?></div>
                    <div class="banner-link">
                        <div class="link-barre"></div>
                        <div class="link-text">
                            <?php $banlink = get_sub_field('banner_link'); ?>
                            <a class="banner-link-a" href="<?= $banlink['url']; ?>" class=""><?= $banlink['title']; ?></a>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <div class="banner-top-hash mt-n5"></div>
<?php
    endwhile;
else :
// no rows found
endif; ?>
<!-- END BANNER TOP -->

<div class="rows ">
    <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php if (have_rows('restaurant_banner_presentation')) : ?>

                    <?php while (have_rows('restaurant_banner_presentation')) : the_row(); ?>

                        <div class="text-center page-subtitles my-1"><?php the_sub_field('banner_presentation_subtitle'); ?></div>
                        <div class="text-center page-title my-4"><?php the_sub_field('banner_presentation_title'); ?></div>



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

                            <div class="card mb-3 mx-auto cont-content">
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
                            <div class="sect-space-3"></div>
                        <?php else :  ?>
                            <div class="card mx-auto cont-content">
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
                            <div class="sect-space-3"></div>
                        <?php endif; ?>
                <?php endwhile;
                endif; ?>
    </section>
    <div class="sect-space-3"></div>
    <section>

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
    </section>
    <div class="sect-space"></div>

    <!-- START restaurant_reservation PART -->
    <section>

        <?php if (have_rows('restaurant_reservation')) : ?>

            <?php while (have_rows('restaurant_reservation')) : the_row();
                        $rest_prez_img = get_sub_field('restaurant_reservation_image'); ?>
                <div class="text-center page-subtitles my-4"><?php the_sub_field('restaurant_reservation_subtitle'); ?></div>
                <div class="text-center page-title"><?php the_sub_field('restaurant_reservation_title'); ?></div>

                <div class="intro-part mx-auto">
                    <div class="row">
                        <div class="col-12 col-lg-9 img-block-intro ">
                            <img src="<?= $rest_prez_img['sizes']["reservation-img"]; ?>" alt="The chef">
                        </div>
                        <!-- <div class="col-0 col-lg-1"></div> -->
                        <div class="col-12 col-lg-3 my-auto">
                            <div class="intro-block">
                                <div class="block-reserve-form">
                                    <?= do_shortcode('[contact-form-7 id="446" title="Reserve"]'); ?>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
        <?php endwhile;
                endif; ?>
    </section>
<?php endwhile;
        endif; ?>

<!-- END restaurant_reservation PART -->

<div class="sect-space" id="Reserve"></div>

<!-- START OUR MENU -->
<?php get_template_part('parts/our-menu'); ?>
<!-- END OUR MENU -->

<?php get_template_part('parts/latest-updates-recipes'); ?>


<?php get_footer(); ?>


<!-- restaurant_banner_presentation
    banner_presentation_title
    banner_presentation_subtitle -->