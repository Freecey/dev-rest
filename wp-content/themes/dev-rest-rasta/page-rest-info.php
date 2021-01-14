<!-- page-rest-info -->

<?php get_header(); ?>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            <h1><?php the_title(); ?></h1>

            <!-- Recup brieve_description from Restaurant description -->
            <div class="rest_description">
                <?= get_field('brieve_description'); ?>
                <br>
            </div>

            <!-- Recup fields from Contact us -->
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

            <!-- recup sub_field from Opening -->

            <!-- <?= the_title('opening'); ?> -->
            <?php if( have_rows('opening') ) :  while( have_rows('opening') ) : the_row(); ?>

            <div class="opening">
                <?= the_sub_field('opening_days'); ?>
                <?= the_sub_field('opening_hours'); ?> <br>
            </div>    

            <?php endwhile; endif; ?>

            <!-- Recup images from Instagram -->

            <?php 

            $images = get_field('instagram');

            if( $images ): ?>
                
                    <?php foreach( $images as $image ): ?>

                        <div class="instagram_images">
                            <a href="<?= $image['url']; ?>">
                                <img src="<?= $image['sizes']['thumbnail']; ?>" alt="<?= $image['alt']; ?>" />
                            </a>
                        </div>

                    <?php endforeach; ?>
                
            <?php endif; ?>

                

        <?php endwhile; endif; ?>