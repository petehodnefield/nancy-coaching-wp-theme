<?php

get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="page-banner page-banner--contact">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-image.png') ?>);"></div>
        <div class="page-banner__content page-banner__content--contact">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <p class="page-banner__text">Thank you for your interest in our professional coaching services! We're here to
                help you unleash your full
                potential and achieve your goals.
            </p>
            <p class="page-banner__text">
                If you have any questions, inquiries, or would like to explore how we can work together, please don't
                hesitate to reach out. Simply fill out the form below, and we'll get back to you as soon as possible.
            </p>
        </div>
    </div>


    <div class="contact">
        <div class="contact-content">

            <div class="generic-content">
                <?php the_content(); ?>
            </div>
        </div>

    </div>

<?php }

get_footer();

?>