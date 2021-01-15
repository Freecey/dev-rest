<?php
/*
Template Name: Informations Restaurant
*/
?>
<?php get_header() ?>
<!-- page-rest-info -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="container-fluid" style="background-color: grey;">
            <div class="row">
                <div class="col-3 p-0">
                    <h1><?php the_title(); ?></h1>

                    <!-- Recup brieve_description from Restaurant description -->
                    <div class="rest_description">
                        <?= get_field('brieve_description'); ?>
                        <br>
                    </div>
                    <!-- Networks icons -->
                    <div class="network-icon">
                        
                    </div>

                </div>

                <!-- Recup fields from Contact us -->
                <div class="col-3 p-0">
                    <div class="contact_us">
                        <?= get_field('phone_number'); ?>
                        <br>
                        <?= get_field('street_and_number'); ?>
                        <br>
                        <?= get_field('postcode_and_city'); ?>
                        <br>
                        <?= get_field('country'); ?>
                        <br>
                    </div>
                </div>

                <!-- recup sub_field from Opening -->
                <div class="col-3 p-0">
                    <!-- <?= the_title('opening'); ?> -->
                    <?php if (have_rows('opening')) :  while (have_rows('opening')) : the_row(); ?>
                            <div class="div">
                                <div class="opening">
                                    <?= the_sub_field('opening_days'); ?>
                                    <?= the_sub_field('opening_hours'); ?> <br>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>


                <!-- Recup images from Instagram -->

                <?php

                $images = get_field('instagram');

                if ($images) : ?>

                <div class="col-3 p-0">
                    <div class="row">
                        <?php foreach ($images as $image) : ?>

                            <div class="col-4 p-0">

                                <a href="<?= $image['url']; ?>">
                                    <img src="<?= $image['sizes']['thumbnail']; ?>" style='width: 60px;' alt="<?= $image['alt']; ?>" />
                                </a>

                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>

                <?php endif; ?>
            </div>
        </div>

<?php endwhile;
endif; ?>