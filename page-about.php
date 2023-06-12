<?php

get_header();

while (have_posts()) {
    the_post(); ?>

<section class="about">
    <img class="about-hero__img" src="<?php echo get_theme_file_uri('/images/stage-speaking.png') ?>" alt="">

    <div class="about-hero__container">
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

</section>

<?php }

get_footer();

?>