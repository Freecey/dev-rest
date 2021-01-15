<?php
/*
Template Name: Informations Restaurant
*/
?>
<?php get_header() ?>
<!-- page-rest-info -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="container-fluid rest-info-main">
            <div class="row rest-info-main-box">
                <div class="col-3">
                    <h1><?php the_title(); ?></h1>

                    <!-- Recup brieve_description from Restaurant description -->
                    <div class="rest_description">
                        <?= get_field('brieve_description'); ?>
                        <br>
                    </div>
                    <!-- Networks icons -->
                    <div class="d-flex network">
                        <div class="network-icon">
                            <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/facebook.svg" alt=""></a>
                        </div>
                        <div class="network-icon">
                            <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/twitter.svg" alt=""></a>
                        </div>
                        <div class="network-icon">
                            <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/instagram.svg" alt=""></a>
                        </div>
                        <div class="network-icon">
                            <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/linkedin.svg" alt=""></a>
                        </div>
                    </div>

                </div>
                
                <!-- recup sub_field from Opening -->
                <div class="col-3">
                    <!-- <?= the_title('opening'); ?> -->
                    <?php if (have_rows('opening')) :  while (have_rows('opening')) : the_row(); ?>
                            <div class="div">
                                <div class="opening">
                                    <img src="/wp-content/themes/dev-rest-rasta/assets/svg/time-clock.svg" alt="" class="time-clock">
                                    <?= the_sub_field('opening_days'); ?>
                                    <?= the_sub_field('opening_hours'); ?> <br>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>

                <!-- Recup fields from Contact us -->
                <div class="col-3">
                    <div class="contact_us">
                        <div class="phone-number">                            
                            <img src="/wp-content/themes/dev-rest-rasta/assets/svg/call (10).svg" alt="">                            
                            <?= get_field('phone_number'); ?>
                        </div>
                        <div class="street-and-number">                            
                            <img src="/wp-content/themes/dev-rest-rasta/assets/svg/place (14).svg" alt="">                            
                            <?= get_field('street_and_number'); ?>
                        </div>
                        <div class="postcode_and_city">
                            <?= get_field('postcode_and_city'); ?>
                        </div>
                        <div class="country">
                            <?= get_field('country'); ?>
                        </div>
                        <div class="email">
                        <img src="/wp-content/themes/dev-rest-rasta/assets/svg/mail-1.svg" alt=""> 
                            <?= get_field('email'); ?>
                        </div>
                    </div>
                </div>

                
                <!-- Recup images from Instagram -->

                <?php

                $images = get_field('instagram');

                if ($images) : ?>

                <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-0">
                    <div class="instagram d-flex flex-wrap">
                        <?php foreach ($images as $image) : ?>

                            <div class="instagram-picture">
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