<footer class="footer">
    <?php
  $siteTitle = 'Nancy Johnson';
  ?>
    <div class="footer__content">
        <div class="footer__column">
            <h2 class="footer__title"><?php echo $siteTitle ?></h2>
            <p class="footer__copyright">© <?php echo date('Y'); ?> <?php echo $siteTitle ?> LLC</p>
            <div>
                <a class="footer__link footer__link--sm">Terms of Use</a>
                <a class="footer__link footer__link--sm">Privacy Policy</a>
            </div>
        </div>
        <div class="footer__column">
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
        <div class="footer__column">
            <div>
                <h3 class="footer__subtitle">Sign up</h3>
                <p class="footer__text">Join our newsletter!</p>
            </div>
            <div>
                <h3 class="footer__subtitle">Follow</h3>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>