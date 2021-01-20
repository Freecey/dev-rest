

<?php


$args = array(
    'page_id' => '336'
);
// Custom query.
$query = new WP_Query( $args );
 
// Check that we have query results.
if ( $query->have_posts() ) {
 
    // Start looping over the query results.
    while ( $query->have_posts() ) {
 
        $query->the_post();
 
        // Contents of the queried post results go here.
        ?>
<div class="container-fluid bg-white-sec">
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

              <?php
              $img_count = 0;
              foreach ($images as $image) :
                $img_count++;
                //echo $img_count ;
              ?>
                <div class="col-6 test-img <?php if ($img_count % 2 == 0) : echo 'text-left';
                                            else : echo 'text-right';
                                            endif;  ?>">
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
          <div class="o-menu-txt-block my-auto text-center">
            <div class="page-subtitles"><?= get_sub_field('subtitle'); ?></div>
            <div class="page-title"><?= get_sub_field('title'); ?></div>
            <div class="intro-b-txt"><?= get_sub_field('text'); ?> </div>
            <div class="'o-menu-btn-sect">
              <a href="/the-menu/" class="btn btn-dark">View the full menu</a>
            </div>

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
</div>
<?php
}
 
}
 
// Restore original post data.
wp_reset_postdata();
 
?>