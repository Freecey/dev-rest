<?php
/*
Template Name: Informations Restaurant
*/
?>
<?php get_header() ?>
<!-- page-rest-info -->
<div class="container-fluid p-0">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="container-fluid rest-info-main">
            <div class="row rest-info-main-box">
                <div class="col-3">
                    <h2><?php the_title(); ?></h2>

                    <!-- Recup brieve_description from Restaurant description -->
                    <div class="rest_description">
                        <?= get_field('brieve_description'); ?>
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
                
                    <?php
                    $field_name = "opening";
                    $field = get_field_object($field_name);

                    echo '<h3>'. $field['label'] . '</h3>';
                    ?>
            
                    <?php if (have_rows('opening')) :  while (have_rows('opening')) : the_row(); ?>
                            <div class="div">
                                <div class="opening">
                                    <img src="/wp-content/themes/dev-rest-rasta/assets/svg/time-clock.svg" alt="" class="time-clock">
                                    <div class="opening-days-and-hours">
                                        <?= the_sub_field('opening_days'); ?>
                                        <div class="opening-line"></div>
                                        <?= the_sub_field('opening_hours'); ?> 
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>

                <!-- Recup fields from Contact us -->
                <div class="col-3">

                    <h3>Contact us</h3>
                   
                    <div class="contact-us-box">
                        <table class="array">
                            <tr>
                                <td ><img class="open-phone-number" src="/wp-content/themes/dev-rest-rasta/assets/svg/call (10).svg" alt=""></td>
                                <td class="open open-phone-number"><?= get_field('phone_number'); ?></td>
                            </tr>
                            <tr>
                                <td ><img src="/wp-content/themes/dev-rest-rasta/assets/svg/place (14).svg" alt=""> </td>
                                <td class="open"><?= get_field('street_and_number'); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="open"><?= get_field('postcode_and_city'); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="open open-country"><?= get_field('country'); ?></td>
                            </tr>
                            <tr>
                                <td class="open-email"><img class="contact-us-icon" src="/wp-content/themes/dev-rest-rasta/assets/svg/mail-1.svg" alt=""> </td>
                                <td class="open open-email"><?= get_field('email'); ?></td>
                            </tr>
                        </table>
                    </div>

                    
                </div>

               
                <!-- Recup images from Instagram -->

                <?php

                $images = get_field('instagram');

                if ($images) : ?>

                <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-0">

                    <?php
                        $field_name = "instagram";
                        $field = get_field_object($field_name);
                    
                        echo '<h3>'. $field['label'] . '</h3>';
                    ?>

                    <div class="instagram-images">
                        <?php foreach ($images as $image) : ?>

                            <a href="<?= $image['url']; ?>">
                                <img src="<?= $image['sizes']['thumbnail']; ?>" style='width: 60px;' alt="<?= $image['alt']; ?>" />
                            </a>
                               
                        <?php endforeach; ?>   
                    </div>
                </div>

                <?php endif; ?>
            </div>
        </div>

<?php endwhile;
endif; ?>

</div>