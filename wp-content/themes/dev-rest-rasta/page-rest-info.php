
<?php get_header() ?>

<!-- page-rest-info -->
<div class="container-fluid p-0 super-box">

    <?php
    if (have_rows('infos_footer')) :
    while (have_rows('infos_footer')) : the_row(); 
    $images = get_sub_field('instagram');
    ?>
            <div class="container p-0 rest-info-main">
                <div class="row rest-info-main-box">
                    <div class="col-12 col-lg-3 ">
                        <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                        <h3><?php the_title(); ?></h3>

                        <!-- Recup brieve_description from Restaurant description -->
                        
                        <div class="rest_description">
                            <?= get_sub_field('restaurant_description'); ?>
                        </div>
                        
                        </div>

                        <!-- Networks icons -->
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="flex d-flex network">
                                <div class="btn network-icon">
                                    <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/facebook.svg" alt="facebook"></a>
                                </div>
                                <div class="btn network-icon">
                                    <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/twitter.svg" alt="twitter"></a>
                                </div>
                                <div class="btn network-icon">
                                    <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/instagram.svg" alt="instagram"></a>
                                </div>
                                <div class="btn network-icon">
                                    <a href="#"><img src="/wp-content/themes/dev-rest-rasta/assets/svg/linkedin.svg" alt="linkedin"></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- recup sub_field from Opening -->
                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">                    
                        
                        <h5>Open Hours</h5>

                        <?php if (have_rows('open_hours')) : while (have_rows('open_hours')) : the_row(); ?>
                            <div class="div">
                                <div class="opening d-flex">
                                    <img src="/wp-content/themes/dev-rest-rasta/assets/svg/time-clock.svg" alt="clock" class="time-clock">
                                    <div class="opening-days-and-hours d-flex">
                                        <div class="days">
                                            <?= get_sub_field('opening_days'); ?>
                                        </div>
                                        <div class="opening-line"></div>
                                        <div class="hours">
                                            <?= get_sub_field('opening_hours'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>

                    </div>

            
                    <!-- Recup fields from Contact us -->
                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">

                        <h5>Contact us</h5>

                        <?php if (have_rows('contact_us')) : the_row(); ?>
                    
                            <div class="contact-us-box">
                                <table class="array">
                                    <tr>
                                        <td ><img class="open-phone-number" src="/wp-content/themes/dev-rest-rasta/assets/svg/call (10).svg" alt="call"></td>
                                        <td class="open open-phone-number"><?= get_sub_field('phone_number'); ?></td>
                                    </tr>
                                    <tr>
                                        <td ><img src="/wp-content/themes/dev-rest-rasta/assets/svg/place (14).svg" alt=""> </td>
                                        <td class="open"><?= get_sub_field('street_and_number'); ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="open"><?= get_sub_field('postcode_and_city'); ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="open open-country"><?= get_sub_field('country'); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="open-email"><img class="contact-us-icon" src="/wp-content/themes/dev-rest-rasta/assets/svg/mail-1.svg" alt="mail"> </td>
                                        <td class="open open-email"><a href="mailto:contact@devrest.me" class="open-email-link"><?= get_sub_field('e-mail'); ?></a></td>
                                    </tr>
                                </table>
                            </div>
                        <?php endif; ?>
                        
                    </div>

                
                    <!-- Recup images from Instagram -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 p-0 mx-md-auto mt-5 mt-lg-0">

                        <div class="text-left text-md-center text-lg-left">

                            <h5>Instagram</h5>

                            <?php 
                                if ($images) : ?>
                                    <div class="instagram-galery mx-auto mx-lg-0">
                                    <?php foreach ($images as $image) : ?>
                                        <div class="'instagram-galery-images">
                                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" style="width: 75px;" alt="instagram thumbnail" />
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="under-line"></div>
                    <!-- <div class="mx-auto"> -->
                    <span class="copyright">@ 2021 All Rights Reserved. Designed by Rasta-Rocket Team</span>
                    <!-- </div> -->
                </div>
            </div>

    <?php endwhile;
    endif; ?>
</div>

