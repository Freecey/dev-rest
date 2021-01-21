<!-- page-the-menu.php -->
<?php get_header(); ?>
<section>
<div class="sect-space-3"></div>
<div class="mx-auto text-center mb-3">
<img src="/wp-content/themes/dev-rest-rasta/assets/images/newsletter.jpg" alt="News Letter">
</div>
<se classe="cont-newsletter ">
<div class="col-12 col-md-8 col-lg-6 mx-auto text-center">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

</div>

<div class="sect-space-3"></div>
</section>
<?php get_footer(); ?>
