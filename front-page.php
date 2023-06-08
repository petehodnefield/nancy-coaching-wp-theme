<?php get_header(); ?>

<!-- Hero section -->
<div class="hero">
    <div class="hero__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/hero-image.png') ?>);">
        <div class="hero__content">
            <div class="hero__signature-wrapper"><img class="hero__signature"
                    src="<?php echo get_theme_file_uri('/images/signature.png') ?>" />
            </div>
            <h1 class="title title--lg">Elevate Your Career with Confidence</h1>
            <h2 class="hero__subheader">Guiding Ambitious Young Women to Success</h2>
            <a class="btn btn--xl btn--primary rounded" href="#">Ignite Your Potential Now</a>
        </div>
    </div>
</div>
<!-- About section -->
<section class="home-about">
    <div class="home-about-content">
        <!-- About image -->
        <div class="home-about__img-wrapper">
            <img class="home-about__img" src="<?php echo get_theme_file_uri('/images/hero-image.png') ?>"
                alt="Nancy sitting in her office full of plants smiling at the camera.">
        </div>
        <div class="home-about__content">
            <h2 class="title title--md">Hi, I'm Nancy </h2>
            <p class="home-about__text home-about__text--mgsm">Welcome! I'm, a professional coach based in the beautiful
                state of Minnesota. With a
                background in human
                resources and a passion for empowering young female professionals, I am dedicated to helping you unlock
                your
                full potential and achieve your career goals.
            </p>
            <p class="home-about__text home-about__text--mglg">
                I bring a deep understanding of organizational dynamics, workplace challenges, and effective strategies
                for
                career advancement. I'll share valuable insights and practical tools to navigate the corporate landscape
                with confidence and authenticity.
            </p>
            <a class="btn btn--primary btn--large rounded" href="/about">My story</a>
        </div>
    </div>
</section>

<!-- Testimonials section -->
<section class="testimonials">
    <div class="testimonials__title-wrapper">
        <h2 class="title title--uppercase">Testimonials</h2>
        <h3 class="title title--lg title--testimonial">Hear from my students</h2>
    </div>

    <div class="testimonial__card">
        <div class="testimonial__img-wrapper">
            <img class="testimonial__img" src="<?php echo get_theme_file_uri('/images/testimonial-image.png') ?>"
                alt="A woman with hoop earrings smiling at the camera.">
        </div>
        <p class="testimonial__text">"Working with Nancy Hodnefield has been an absolute game-changer! Her insightful
            guidance and unwavering
            support have empowered me to overcome my fears and achieve remarkable personal growth. Nancy's coaching has
            truly transformed my life, and I couldn't be more grateful for her expertise and dedication."
        </p>
        <p class="testimonial__name">
            ~ Sarah Thompson
        </p>
    </div>
</section>

<!-- Growth solutions section -->
<section class="growth section-block--xl">
    <div class="titles-wrapper">
        <h2 class="title title--uppercase">Growth Solutions</h2>
        <h3 class="title title--lg title--testimonial">Elevate Your Career</h3>
    </div>
    <div class="growth__cards-wrapper">
        <div class="growth__card"
            style="background-image: url(<?php echo get_theme_file_uri('/images/leadership.jpg') ?>);">
            <div class="growth__card-content">
                <h3 class="growth__card-title">Leadership Excellence</h3>
                <p class="growth__card-desc">Develop exceptional leadership skills for greater impact.</p>
            </div>
        </div>
        <div class="growth__card"
            style="background-image: url(<?php echo get_theme_file_uri('/images/career-success.jpg') ?>);">
            <div class="growth__card-content">
                <h3 class="growth__card-title">Career Success Blueprint</h3>
                <p class="growth__card-desc">Unlock your career potential and thrive professionally.</p>
            </div>
        </div>
        <div class="growth__card"
            style="background-image: url(<?php echo get_theme_file_uri('/images/transform.jpg') ?>);">
            <div class="growth__card-content">
                <h3 class="growth__card-title">Transform Your Life</h3>
                <p class="growth__card-desc">Experience profound personal growth and achieve your dreams.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-block--lg blog-snip">
    <div class="blog-snip__content">
        <h2 class="title--lg">From Our Blog</h2>
        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
        ));

        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
        <div class="event-summary">
            <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 18);
                        } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
        </div>
        <?php }
        wp_reset_postdata();
        ?>




        <p class="t-center no-margin event-summary__all-posts"><a href="<?php echo site_url('/blog'); ?>"
                class="btn btn--yellow">View All
                Blog Posts</a></p>
    </div>
</section>

<!-- CTA section -->
<section class="section-block--lg cta"
    style="background-image: url(<?php echo get_theme_file_uri('/images/hero-image.png') ?>);">
    <div>
        <h2 class="title--xl">Ready to level up your career?</h2>
        <h3 class="title--24">Get access to my free career guide and start becoming your best self</h3>
        <form>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email">
            <button class="btn btn--primary btn--large" type="submit">Download</button>
        </form>
    </div>
</section>
<!-- <div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

            <?php
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

            while ($homepageEvents->have_posts()) {
                $homepageEvents->the_post(); ?>
            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month"><?php
                                                        $eventDate = new DateTime(get_field('event_date'));
                                                        echo $eventDate->format('M');
                                                        ?></span>
                    <span class="event-summary__day"><?php
                                                        echo $eventDate->format('d');
                                                        ?></span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a
                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php if (has_excerpt()) {
                            echo get_the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_content(), 18);
                        } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                </div>
            </div>
            <?php }
            ?>

            <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>"
                    class="btn btn--blue">View All Events</a></p>

        </div>
    </div>

</div> -->


<!-- <div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>);">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Free Transportation</h2>
                        <p class="t-center">All students have free unlimited bus fare.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg'); ?>);">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                        <p class="t-center">Our dentistry program recommends eating apples.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg'); ?>);">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Free Food</h2>
                        <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
        </div>
    </div>
</div> -->

<?php get_footer();

?>