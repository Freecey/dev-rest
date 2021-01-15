<div class="container-fluid d-flex justify-content-center">
    <?php echo paginate_links([
        'prev_text' => '<img class="arrow-pagination" src="/wp-content/themes/dev-rest-rasta/assets/svg/arrowleft.svg" alt="">
                ',
        'next_text' => '<img class="arrow-pagination" src="/wp-content/themes/dev-rest-rasta/assets/svg/arrowright.svg" alt="">
                ',
    ]); ?>
</div>