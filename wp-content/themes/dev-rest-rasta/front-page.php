<!-- front-page.php -->
<?php get_header(); ?>


<!-- START BANNER TOP -->
<?php
if (have_rows('banner_top')) :
  while (have_rows('banner_top')) : the_row();
    $bannertop_img = get_sub_field('banner_image');
?>
    <section class="banner-top" style="background-image: url(' <?= $bannertop_img['url']; ?> ');">
      <div class="cont-banner">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
          <div class="font-subtitle-top"><?= get_sub_field('subtitle'); ?></div>
          <div class="font-title-top"><?= get_sub_field('main_title'); ?></div>
          <div class="banner-link">
            <div class="link-barre"></div>
            <div class="link-text">
            <?php $banlink = get_sub_field('banner_link') ; ?>
              <a class="banner-link-a" href="<?= $banlink['url']; ?>" class=""><?= $banlink['title']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="banner-top-hash mt-n5"></div>

    <div class=" text-center banner-card mx-auto">
      <div class="d-flex justify-content-center flex-wrap flex-lg-nowrap">

        <?php if (have_rows('card_banner_1')) : while (have_rows('card_banner_1')) : the_row(); ?>
            <div class="text-center card-intro mt-4 mt-lg-n5">
              <div class="c-intro-img card-img1 mt-5 mb-3"></div>
              <div class="c-intro-tt py-2"><?= get_sub_field('card_title'); ?></div>
              <div class="c-intro-txt d-none d-sm-none d-md-block d-lg-block px-5  py-2">
                <p><?= get_sub_field('card_text'); ?></p>
              </div>
            </div>
        <?php endwhile;
        endif; ?>

        <?php if (have_rows('card_banner_2')) : while (have_rows('card_banner_2')) : the_row(); ?>
            <div class="text-center card-intro mx-0 mx-lg-3  mt-4 mt-lg-n5">
              <div class="c-intro-img card-img2 mt-5 mb-3"></div>
              <div class="c-intro-tt py-2"><?= get_sub_field('card_title'); ?></div>
              <div class="c-intro-txt d-none d-sm-none d-md-block d-lg-block  px-5  py-2"><?= get_sub_field('card_text'); ?></div>
            </div>
        <?php endwhile;
        endif; ?>

        <?php if (have_rows('card_banner_3')) : while (have_rows('card_banner_3')) : the_row(); ?>
            <div class="text-center card-intro  mt-4 mt-lg-n5 ">
              <div class="c-intro-img card-img3 mt-5 mb-3"></div>
              <div class="c-intro-tt  py-2"><?= get_sub_field('card_title'); ?></div>
              <div class="c-intro-txt d-none d-sm-none d-md-block d-lg-block  px-5  py-2"><?= get_sub_field('card_text'); ?></div>
            </div>
        <?php endwhile;
        endif; ?>


      </div>
    </div>



<?php
  endwhile;
else :
// no rows found
endif; ?>
<!-- END BANNER TOP -->




<!-- START INTRO -->
<?php
if (have_rows('intro')) :
  while (have_rows('intro')) : the_row();
    $intro_img = get_sub_field('intro_image');
?>
    <section class="intro-part mx-auto">
      <div class="row">
        <div class="col-12 col-lg-7 img-block-intro">
          <img src="<?= $intro_img['sizes']["frontimg"]; ?>" alt="The chef">
        </div>
        <div class="col-12 col-lg-5 my-auto">
          <div class="intro-block">
            <div class="intro-block-pad">
              <div class="page-subtitles"><?= get_sub_field('title'); ?></div>
              <div class="page-title"><?= get_sub_field('subtitle'); ?></div>
              <div class="intro-b-st2"><?= get_sub_field('subtitle_2'); ?> </div>
              <div class="intro-b-txt"><?= get_sub_field('text'); ?> </div>
              <?php if (have_rows('signature')) : while (have_rows('signature')) : the_row(); ?>
                  <div class="intro-b-s-subtitle"><?= get_sub_field('subtitle'); ?> </div>
                  <div class="intro-b-s-title page-subtitles"><?= get_sub_field('title'); ?> </div>
            </div>
          </div>

        </div>
      </div>

    </section>



<?php endwhile;
              endif; ?>

<br>
<?php
  endwhile;
else :
// no rows found
endif; ?>
<!-- END INTRO -->


<!-- START RESTAURANTS PART -->
<section class="cont-restautants" id="OursRestaurants">
  <?php if (have_rows('our_restaurants')) : while (have_rows('our_restaurants')) : the_row(); ?>

      <div class="page-subtitles text-center"><?= get_sub_field('title'); ?></div>
      <div class="page-title text-center"><?= get_sub_field('subtitle'); ?></div>

      <?php $query = new WP_Query([
        'post_type' => 'restaurants',
        'order' => 'ASC'
      ]);
      $testcount = get_row_index();
      while ($query->have_posts()) : $query->the_post(); ?>


        <?php if (have_rows('restaurant_presentation')) : ?>

          <?php
          while (have_rows('restaurant_presentation')) : the_row(); ?>


            <?php
            $row_i = get_row_index();
            $rest_prez_img = get_sub_field('restaurant_presentation_block_image_');
            //var_dump($rest_prez_img);
            //var_dump($rest_prez_img['sizes']["rest700"]);
            ?>

            <?php if ($row_i === 1) :


              // echo ' YOLOOOOO : ' .  $testcount; 
            ?>

              <?php if ($testcount % 2 == 0) : ?>
                <div class="o-rest-part mx-auto">
                  <div class="row">
                    <div class="col-12 col-lg-7 img-block">
                      <img src="<?= $rest_prez_img['sizes']["frontimg"]; ?>" alt="Restaurants picture">
                    </div>
                    <div class="col-12 col-lg-5 my-auto text-center">
                      <div class="intro-block">
                        <div class="intro-block-pad">
                          <div class="page-subtitles"><?= get_sub_field('restaurant_presentation_block_subtitle'); ?></div>
                          <div class="page-title"><?= get_sub_field('restaurant_presentation_block_title'); ?></div>
                          <div class="intro-b-txt"><?= get_sub_field('restaurant_presentation_block_wysiwig'); ?> </div>
                          <div class="'o-menu-btn-sect">
                            <a href="<?php the_permalink(); ?>" class="btn btn-dark">More infos</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php else :  ?>
                <div class="o-rest-part mx-auto">
                  <div class="row">

                    <div class="col-12 col-lg-5 my-auto order-2 order-lg-1">
                      <div class="intro-block-left">
                        <div class="intro-block-pad text-center">
                          <div class="page-subtitles"><?= get_sub_field('restaurant_presentation_block_subtitle'); ?></div>
                          <div class="page-title"><?= get_sub_field('restaurant_presentation_block_title'); ?></div>
                          <div class="intro-b-txt"><?= get_sub_field('restaurant_presentation_block_wysiwig'); ?> </div>
                          <div class="'o-menu-btn-sect">
                            <a href="<?php the_permalink(); ?>" class="btn btn-dark">More infos</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-7 img-block order-1 order-lg-2">
                      <img src="<?= $rest_prez_img['sizes']["frontimg"]; ?>" alt="Restaurants picture">
                    </div>
                  </div>
                </div>

              <?php endif; ?>

            <?php $testcount++;
            endif; ?>
        <?php endwhile;
        endif; ?>



      <?php endwhile;
      wp_reset_postdata(); ?>
  <?php endwhile;
  endif; ?>

</section>
<!-- END RESTAURANTS PART -->



<!-- START OUR MENU -->
<?php get_template_part('parts/our-menu'); ?>
<!-- END OUR MENU -->





<!-- START testimony -->

<section id="carouseltestimony" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
    if (have_rows('testimony')) :
      while (have_rows('testimony')) : the_row();
        $testimony_img = get_sub_field('image');
        $row_i = get_row_index();
        // echo $row_i;
    ?>

        <div class="carousel-item testimony <?php if ($row_i === 1) : echo ' active';
                                            endif; ?>">
          <div class="test-top-hash pt-5 mb-n5"></div>
          <div class="row">
            <div class="col-12 col-lg-6 text-center my-auto order-2 order-lg-1 test-block-text">
              <div>
                <div class="mx-auto test-quote"></div>
                <div class="my-5 mx-5 text-comment"><?= get_sub_field('text'); ?></div>
                <div class="my-5"><?= get_sub_field('name'); ?></div>
              </div>
              <ol class="carousel-indicators">
                <li data-target="#carouseltestimony" data-slide-to="0" class="<?php if ($row_i === 1) : echo ' active';
                                                                              endif; ?>"></li>
                <li data-target="#carouseltestimony" data-slide-to="1" class="<?php if ($row_i === 2) : echo ' active';
                                                                              endif; ?>"></li>
                <li data-target="#carouseltestimony" data-slide-to="2" class="<?php if ($row_i === 3) : echo ' active';
                                                                              endif; ?>"></li>
              </ol>
            </div>

            <div class="col-12 col-lg-6 test-img order-1 order-lg-2" style="background-image: url(' <?= $testimony_img['url']; ?> ');"></div>


          </div>
          <div class="test-bottom-hash-gray"></div>
        </div>

    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>


    <a class="carousel-control-prev d-flex d-lg-none" href="#carouseltestimony" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon mb-5" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-flex d-lg-none" href="#carouseltestimony" role="button" data-slide="next">
      <span class="carousel-control-next-icon mb-5" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- <script src="http://www.wordpress.lan/wp-content/themes/dev-rest-rasta/js/popper.min.js"></script>
  <script src="http://www.wordpress.lan/wp-content/themes/dev-rest-rasta/js/bootstrap.min.js"></script> -->

</section>

  <!-- END testimony -->


  <!-- ADD HERE LAST RECIPES PART -->
  <?php get_template_part('parts/latest-updates-recipes'); ?>

  <?php get_footer(); ?>