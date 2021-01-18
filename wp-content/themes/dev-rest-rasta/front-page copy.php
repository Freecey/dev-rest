<!-- front-page.php -->
<?php get_header(); ?>


<!-- START BANNER TOP -->
<?php
if (have_rows('banner_top')) :
  while (have_rows('banner_top')) : the_row();
    $bannertop_img = get_sub_field('banner_image');
?>
    <div class="banner-top" style="background-image: url(' <?= $bannertop_img['url']; ?> ');">
      <div class="cont-banner">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
          <div class="font-subtitle-top"><?= get_sub_field('subtitle'); ?></div>
          <div class="font-title-top"><?= get_sub_field('main_title'); ?></div>
          <div class="banner-link">
            <div class="link-barre"></div>
            <div class="link-text">
              Check our menu
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="banner-top-hash mt-n5"></div>

    <div class=" text-center banner-card mx-auto">
      <div class="d-flex justify-content-center flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap">

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
            <div class="text-center card-intro mx-0 mx-lg-3  mt-0 mt-lg-n5">
              <div class="c-intro-img card-img2 mt-5 mb-3"></div>
              <div class="c-intro-tt py-2"><?= get_sub_field('card_title'); ?></div>
              <div class="c-intro-txt d-none d-sm-none d-md-block d-lg-block  px-5  py-2"><?= get_sub_field('card_text'); ?></div>
            </div>
        <?php endwhile;
        endif; ?>

        <?php if (have_rows('card_banner_3')) : while (have_rows('card_banner_3')) : the_row(); ?>
            <div class="text-center card-intro  mt-0 mt-lg-n5 ">
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
    <div class="intro-part mx-auto">
      <div class="row">
        <div class="col-12 col-lg-7">
          <img src="<?= $intro_img['url']; ?>" alt="The chef">
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

    </div>



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
<div class="cont-frontpage">
  <!-- ADD HERE RESTAURANTS PART --> ADD HERE RESTAURANTS PART
</div>
<!-- END RESTAURANTS PART -->



<!-- START OUR MENU -->


<div class="our-menu mx-auto">
  <div class="row">
    <?php
    if (have_rows('our_menu')) :
      while (have_rows('our_menu')) : the_row();
    ?>
        <div class="col-12 col-lg-6">
          <div class="row">

            <?php
            $images = get_sub_field('images');
            if ($images) : ?>

              <?php foreach ($images as $image) : ?>
                <div class="col-6 test-img">
                  <a href="<?php echo esc_url($image['url']); ?>">
                    <img src="<?php echo esc_url($image['sizes']['ourmenu280']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </a>
                  <p><?php echo esc_html($image['caption']); ?></p>
                </div>
              <?php endforeach; ?>

            <?php endif; ?>


          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="o-menu-txt-block my-auto">
            <div class="page-subtitles"><?= get_sub_field('subtitle'); ?></div>
            <div class="page-title"><?= get_sub_field('title'); ?></div>
            <div class="intro-b-txt"><?= get_sub_field('text'); ?> </div>
            <div class="'o-menu-btn-sect">View the full menu</div>
          </div>
        </div>

        <?php // var_dump(get_sub_field('images')) ; // RAND 4 IMAGE
        ?> <br>


    <?php
      endwhile;
    else :
    // no rows found
    endif; ?>
  </div>
</div>
<!-- END OUR MENU -->





<!-- START testimony -->

<?php
if (have_rows('testimony')) :
  while (have_rows('testimony')) : the_row();
    $testimony_img = get_sub_field('image');
    $row_i = get_row_index();
    // echo $row_i;
    ?>
    <?php if ($row_i === 1) : echo ' active'; endif; ?>


    <div class="test-top-hash pt-5 mb-n5"></div>
    <div class="testimony">
      <div class="row">
        <div class="col-12 col-lg-6 text-center my-auto">
          <div class="my-5 mx-auto test-quote"></div>
          <div class="my-5"><?= get_sub_field('text'); ?></div>
          <div class="my-5"><?= get_sub_field('name'); ?></div>

        </div>
        <div class="col-12 col-lg-6 test-img" style="background-image: url(' <?= $testimony_img['url']; ?> ');"></div>





        <?php // echo $testimony_img['url'];         
        ?>



      </div>
    </div>
    <div class="test-bottom-hash mt-n5"></div>
<?php
  endwhile;
else :
// no rows found
endif; ?>





<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php
  if (have_rows('testimony')) :
  while (have_rows('testimony')) : the_row();
    $testimony_img = get_sub_field('image');
    $row_i = get_row_index();
    // echo $row_i;
    ?>
    
    <div class="test-top-hash pt-5 mb-n5"></div>
    <div class="carousel-item testimony <?php if ($row_i === 1) : echo ' active'; endif; ?>">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <div>
          <div class="my-5 mx-auto test-quote"></div>
          <div class="my-5"><?= get_sub_field('text'); ?></div>
          <div class="my-5"><?= get_sub_field('name'); ?></div>
          </div>
        </div>
      
        <div class="col-12 col-lg-6 test-img" style="background-image: url(' <?= $testimony_img['url']; ?> ');"></div>
        

      </div>
    </div>
    <!-- <div class="test-bottom-hash mt-n5"></div> -->
    <?php
  endwhile;
else :
// no rows found
endif; ?>
    

    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>





<!-- FOR TEST DELETE AFTER -->

<!-- <div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <div>
            <h2>Title 1 </h2>
            <p>Lorem ipsum</p>
          </div>
        </div>
        <div class="col-6">
          <img class="d-block w-100" src="http://lorempixel.com/304/220/" alt="First slide">
        </div>

      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <div>
            <h2>Title 2</h2>
            <p>Lorem ipsum</p>
          </div>
        </div>
        <div class="col-6">
          <img class="d-block w-100" src="http://lorempixel.com/304/220/nightlife/" alt="Second slide">
        </div>

      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-6 d-flex align-items-center">
          <div>
            <h2>Title 3</h2>
            <p>Lorem ipsum</p>
          </div>
        </div>
        <div class="col-6">
          <img class="d-block w-100" src="http://lorempixel.com/304/220/sports/" alt="Third slide">
        </div>

      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->
<!-- FOR TEST DELETE AFTER -->

  <script src="http://www.wordpress.lan/wp-content/themes/dev-rest-rasta/js/popper.min.js"></script>
  <script src="http://www.wordpress.lan/wp-content/themes/dev-rest-rasta/js/bootstrap.min.js"></script>


  <!-- END testimony -->


  <!-- ADD HERE LAST RECIPES PART -->



  <?php get_footer(); ?>


  <?php get_footer(); ?>