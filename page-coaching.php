<?php

get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="page-banner page-banner--coaching ">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-image.png') ?>);"></div>
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

        <!-- 1 on 1 coaching section -->
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
                <img class="one-on-one__img" src="<?php echo get_theme_file_uri('/images/two-professionals.png') ?>" alt="Two female professionals looking serious.">
            </div>
        </div>

        <!-- Career Transitioning Coaching Section -->
        <div class="transitioning" id="transitioning">
            <div class="transitioning__content-wrapper">
                <div class="transitioning__content">
                    <h2 class="title--uppercase">Career Transition Coaching</h2>
                    <h3 class="title--lg max-w-660 one-on-one__title">Embrace New Opportunities with Confidence
                    </h3>
                    <p class="max-w-660 one-on-one__text">Are you considering a career transition? Whether you're
                        looking to switch industries, explore entrepreneurship, or pursue a passion project, our career
                        transition coaching services are designed to help you navigate this exciting yet challenging
                        phase in your professional life.
                    </p>

                    <p class="max-w-660 one-on-one__text">
                        Together, we'll embark on a comprehensive journey that includes self-assessment, exploration of
                        potential career paths, and development of a strategic plan to make your transition a success.
                        We'll identify your transferable skills, leverage your strengths, and address any fears or
                        uncertainties that may arise during this process.
                    </p>
                    <p class="max-w-660 one-on-one__text">
                        Through personalized guidance and practical tools, I will provide you with the confidence and
                        clarity needed to navigate the job market, create a standout resume, and excel in interviews.
                        Together, we'll ensure that your career transition aligns with your values, passions, and
                        long-term goals, allowing you to embark on a fulfilling and rewarding new chapter in your
                        professional life.
                    </p>
                    <a href="#" class="btn btn--large btn--primary rounded">Embrace change</a>
                </div>
                <img class="transitioning__img" src="<?php echo get_theme_file_uri('/images/professional.jpg') ?>" alt="A female professional standing at a desk with a computer smiling at the camera.">
            </div>
        </div>
    </div>

<?php }

get_footer();

?>