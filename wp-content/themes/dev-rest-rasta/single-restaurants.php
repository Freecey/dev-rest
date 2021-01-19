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

                    <div class="col-4">
                        <!-- <form> -->
<?= do_shortcode('[contact-form-7 id="446" title="Reserve"]'); ?>
                            <!-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Email</label>
                                    <input type="text" class="form-control" id="inputName">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPhone">Phone Number</label>
                                    <input type="tel" class="form-control" id="inputPhone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputTable">Table For</label>
                                    <select id="inputTable" class="form-control">
                                        <option selected>1 Person</option>
                                        <option>2 Persons</option>
                                        <option>3 Persons</option>
                                        <option>4 Persons</option>
                                        <option>5 Persons</option>
                                        <option>6 Persons</option>
                                        <option>7 Persons</option>
                                        <option>8 Persons</option>
                                        <option>More</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputPlace">Place</label>
                                    <select id="inputPlace" class="form-control">
                                        <option selected>Liege</option>
                                        <option>Namur</option>
                                        <option>Arlon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputTime">Select Time</label>
                                    <select id="inputTime" class="form-control">
                                        <option selected>12:00 AM</option>
                                        <option>12:30 AM</option>
                                        <option>13:00 AM</option>
                                        <option>13:30 AM</option>
                                        <option>14:00 AM</option>
                                        <option>17:30 AM</option>
                                        <option>18:00 AM</option>
                                        <option>18:30 AM</option>
                                        <option>19:00 AM</option>
                                        <option>19:30 AM</option>
                                        <option>20:00 AM</option>
                                        <option>20:30 AM</option>
                                        <option>21:00 AM</option>
                                        <option>21:30 AM</option>
                                        <option>22:00 AM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputDate">Select Date</label>
                                    <select id="inputDate" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="YourMessage">Your Message</label>
                                <textarea class="form-control" id="YourMessage" rows="3"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-primary">RESERVE NOW</button>
                                </div>
                            </div> -->
                        <!-- </form> -->
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