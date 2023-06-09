<footer class="footer">
    <?php
    $siteTitle = 'Nancy Johnson';
    ?>
    <div class="footer__content">
        <div class="footer__column footer__column--lg">
            <h2 class="footer__title"><?php echo $siteTitle ?></h2>
            <p class="footer__copyright">© <?php echo date('Y'); ?> <?php echo $siteTitle ?> LLC</p>
            <div class="footer__privacy-wrapper">
                <a href="/terms-of-use" class="footer__link footer__link--sm">Terms of Use</a>
                <a href="/privacy-policy" class="footer__link footer__link--sm">Privacy Policy</a>
            </div>
        </div>
        <div class="footer__column footer__column--sm footer__column--hide">
            <h3 class="footer__subtitle">Quick Links</h3>
            <ul class="footer__ul">
                <li>
                    <a class="footer__link footer__link--lg" href="/">Home</a>
                </li>
                <li>
                    <a class="footer__link footer__link--lg" href="/">About</a>
                </li>
                <li>
                    <a class="footer__link footer__link--lg" href="/">Coaching</a>
                </li>
                <li>
                    <a class="footer__link footer__link--lg" href="/">Testimonials</a>
                </li>
                <li>
                    <a class="footer__link footer__link--lg" href="/">Get in touch</a>
                </li>
            </ul>
        </div>
        <div class="footer__column footer__column--sm  footer__column--hide">

            <h3 class="footer__subtitle">Follow</h3>
            <div class="social__icons-wrapper">
                <a href="#" class="social__icon-wrapper social__icon-wrapper--white">
                    <i class="fa-brands fa-instagram social__icon social__icon--primary"></i>
                </a>
                <a href="#" class="social__icon-wrapper social__icon-wrapper--white">
                    <i class="fa-brands fa-facebook-f social__icon social__icon--primary"></i>
                </a>
                <a href="#" class="social__icon-wrapper social__icon-wrapper--white">
                    <i class="fa-brands fa-linkedin-in social__icon social__icon--primary"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>