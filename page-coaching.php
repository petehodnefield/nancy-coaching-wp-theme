<?php

get_header();

while (have_posts()) {
    the_post(); ?>

<div class="page-banner page-banner--coaching ">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/hero-image.png') ?>);"></div>
    <div class="page-banner__content ">
        <h1 class="page-banner__title">Work With Us</h1>
        <!-- <div class="page-banner__links-wrapper">
                <a href="#1on1">
                    <div class="page-banner__link-wrapper">
                        <h2 class="page-banner__link">1 on 1 Coaching</h2>
                    </div>
                </a>
                <a href="#transitioning">
                    <div class="page-banner__link-wrapper">
                        <h2 class="page-banner__link">Career Transitioning</h2>
                    </div>
                </a>
                <a href="#leadership">
                    <div class="page-banner__link-wrapper">
                        <h2 class="page-banner__link">Leadership Development</h2>
                    </div>
                </a>
            </div> -->

    </div>
</div>


<div class="coaching" id="1on1">
    <div class="one-on-one">
        <div class="one-on-one__content-wrapper">


            <div class="one-on-one__content">
                <h2 class="title--uppercase">1 On 1 Coaching</h2>
                <h3 class="title--lg max-w-660 one-on-one__title">Personalized Guidance for Young Female Professionals
                </h3>
                <p class="max-w-660 one-on-one__text">In our one-on-one coaching sessions, we offer a highly
                    personalized and tailored
                    approach to help young
                    female professionals navigate their unique challenges and achieve their goals. Together, we'll
                    embark on
                    a transformative journey that focuses on your individual needs, aspirations, and growth.
                </p>
                <div class="one-on-one__list-wrapper">
                    <p class="max-w-660 one-on-one__text one-on-one__text--list">Some of what we'll cover:</p>
                    <ul class="one-on-one__ul">
                        <li class="one-on-one__li">Career advancement</li>
                        <li class="one-on-one__li">Work-life balance</li>
                        <li class="one-on-one__li">Building confidence</li>
                        <li class="one-on-one__li">Address self-limiting beliefs</li>
                    </ul>
                </div>
                <p class="max-w-660 one-on-one__text">
                    We are committed to providing you with unwavering support and guidance as we work towards your
                    desired
                    outcomes. Together, we'll develop action plans, set achievable milestones, and navigate through
                    obstacles that may arise. With our experience and expertise, we will empower you to unlock your full
                    potential and thrive in both your personal and professional endeavors.
                </p>
                <a href="#" class="btn btn--large btn--primary rounded">Start your journey</a>
            </div>
            <img class="one-on-one__img" src="<?php echo get_theme_file_uri('/images/two-professionals.png') ?>"
                alt="Two female professionals looking serious.">

        </div>
    </div>

</div>

<?php }

get_footer();

?>