<?php

get_header();

while (have_posts()) {
    the_post(); ?>

<section class="about">
    <!-- Hero section -->
    <div class="about-hero__container">
        <img class="about-hero__img" src="<?php echo get_theme_file_uri('/images/stage-speaking.png') ?>"
            alt="A woman standing on stage speaking to a crowd through a microphone.">
        <div class="about-hero">
            <div class="about-hero__content">
                <h3 class="title--uppercase">Welcome!</h3>
                <h2 class="title--lg">Empowering Young Professionals to Reach Their Full Potential</h2>
                <p>
                    I'm Nancy, a passionate professional coach dedicated to guiding and mentoring young female
                    professionals
                    like you. I firmly believe that every woman has incredible potential waiting to be unleashed, and
                    it's
                    our mission to help you tap into that power and achieve the success and fulfillment you deserve.
                </p>
                <p>
                    As a young professional myself not too long ago, I understand the challenges and unique obstacles
                    that
                    women face in the workplace. Through years of experience and personal growth, I've developed a
                    coaching
                    approach tailored specifically to address these challenges head-on. Together, we'll navigate through
                    any
                    roadblocks, harness your strengths, and create a clear path to realizing your goals and aspirations.
                </p>
                <p>I strongly believe that mentoring is a powerful tool for personal and professional development. By
                    providing guidance, support, and a safe space for exploration, I aim to empower you to break through
                    self-limiting beliefs, build your confidence, and embrace your authentic self. Together, we'll
                    uncover
                    your true potential and unlock the doors to endless opportunities.</p>
            </div>
        </div>
    </div>

    <!-- Our approach section -->
    <div class="about-approach">
        <div class="about-approach__img-wrapper">
            <img class="about-approach__img" src="<?php echo get_theme_file_uri('/images/table.png') ?>"
                alt="A women sitting at a kitchen table with her elbows on the table smiling at the camera">
        </div>
        <div class="about-approach__content">
            <h3 class="title--uppercase">Our Approach</h3>
            <h2 class="title--lg">Holistic Coaching for Lasting Transformation</h2>
            <p>
                At Nancy Johnson Coaching, our approach is rooted in a holistic perspective that considers every aspect
                of your life and career. We understand that your professional journey is intertwined with your personal
                growth, and we take a comprehensive approach to ensure your transformation is sustainable and impactful.
            </p>
            <p>
                Through personalized one-on-one coaching sessions, we'll delve deep into your unique circumstances,
                goals, and aspirations. We'll work together to identify and overcome any limiting beliefs, develop
                effective strategies, and enhance your skills and capabilities. Whether you're looking to advance in
                your current role, transition to a new career, or establish your own business, our coaching sessions
                will provide you with the tools and insights to make it happen.
            </p>
            <p>
                In addition to individual coaching, we also offer workshops and group sessions where you'll have the
                opportunity to connect with like-minded young professionals. These sessions provide a supportive
                community where you can share experiences, learn from others, and expand your network.
            </p>
        </div>
    </div>

    <!-- What to expect section -->
    <div class="about-expect">
        <div class="about-expect__content">
            <h3 class="title--uppercase">What to Expect</h3>
            <h2 class="title--lg">A Personalized Coaching Journey Tailored to You</h2>
            <p>
                When you embark on a coaching journey with Nancy Johnson Coaching, you can expect a highly personalized
                and tailored experience designed to meet your specific needs and goals. Here's what you can anticipate
                along the way:
            </p>
            <p>
                1. <span class="bold text--primary">Discovery:</span> We'll start by getting to know each other and
                understanding your current
                situation,
                goals, and aspirations. This phase allows us to establish a strong foundation and create a roadmap
                for your coaching journey.
            </p>
            <p>
                2. <span class="bold text--primary">Exploration:</span> Through thought-provoking conversations and
                powerful questioning, we'll delve deep into your values, strengths, and passions. We'll uncover any
                limiting beliefs or barriers and develop strategies to overcome them.
            </p>
            <p>
                3. <span class="bold text--primary">Action:</span> Armed with a clear vision and concrete goals, we'll
                develop an actionable plan to help you make steady progress towards your objectives. We'll identify
                specific steps, milestones, and accountability measures to ensure your success.
            </p>


        </div>
    </div>

    <!-- Let's get started section -->
    <div class="about-cta">
        <img class="about-cta__img" src="<?php echo get_theme_file_uri('/images/smiling.png') ?>"
            alt="A woman with a big smile and a blurred background.">
        <div class="about-cta__content">
            <h3 class="title--uppercase">Let's Get Started</h3>
            <h2 class="title--lg">Take the First Step Towards a Brighter Future</h2>
            <h3 class="title--24">Are you ready to embark on a transformative coaching journey that will empower you to
                reach new heights
                in your personal and professional life? </h3>
            <a href="/contact" class="btn btn--primary btn--large rounded">Reach out</a>
        </div>
    </div>
</section>

<?php }

get_footer();

?>