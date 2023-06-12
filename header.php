<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php $siteTitle = "Nancy Johnson"; ?>
    <header class="site-header">
        <div class="site-header__content">
            <h2 class="logo">
                <a class="logo__a" href="<?php echo site_url('/') ?>"><?php echo $siteTitle; ?></a>
            </h2>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                    aria-hidden="true"></i></span>
            <nav class="nav">
                <ul class="nav__ul">
                    <li class="nav__li" <?php
                                        if (is_page('home') or wp_get_post_parent_id(0) === 22) echo 'class="nav__selected"'
                                        ?>>
                        <a class="nav__a" href="<?php echo site_url('/') ?>">
                            <?php
                            if (is_page('home') or wp_get_post_parent_id(0) === 22) { ?>
                            •Home
                            <?php } else { ?>
                            Home
                            <? }
                            ?>
                        </a>
                    </li>
                    <li class="nav__li" <?php
                                        if (is_page('about') or wp_get_post_parent_id(0) === 5) echo 'class="nav__selected"'
                                        ?>>
                        <a class="nav__a" href="<?php echo site_url('/about') ?>">
                            <?php
                            if (is_page('about') or wp_get_post_parent_id(0) === 22) { ?>
                            •About
                            <?php } else { ?>
                            About
                            <? }
                            ?>
                        </a>
                    </li>
                    <li class="nav__li" <?php
                                        if (is_page('coaching') or wp_get_post_parent_id(0) === 14) echo 'class="nav__selected"'
                                        ?>>
                        <a class="nav__a" href="<?php echo site_url('/coaching') ?>">
                            <?php
                            if (is_page('coaching') or wp_get_post_parent_id(0) === 22) { ?>
                            •Coaching
                            <?php } else { ?>
                            Coaching
                            <? }
                            ?>
                        </a>
                    </li>
                    <li class="nav__li" <?php
                                        if (is_page('contact') or wp_get_post_parent_id(0) === 16) echo 'class="nav__selected"'
                                        ?>>
                        <a class="nav__a" href="<?php echo site_url('/contact') ?>">
                            <?php
                            if (is_page('contact') or wp_get_post_parent_id(0) === 22) { ?>
                            •Contact
                            <?php } else { ?>
                            Contact
                            <? }
                            ?>
                        </a>
                    </li>
                    <li class="nav__li" <?php
                                        if (is_page('blog') or wp_get_post_parent_id(0) === 31) echo 'class="nav__selected"'
                                        ?>>
                        <a class="nav__a" href="<?php echo site_url('/blog') ?>">
                            <?php
                            if (is_page('blog') or wp_get_post_parent_id(0) === 31) { ?>
                            •Blog
                            <?php } else { ?>
                            Blog
                            <? }
                            ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="social__icons-wrapper social__icons-wrapper--header">
                <a href="#" class="social__icon-wrapper social__icon-wrapper--outline">
                    <i class="fa-brands fa-instagram social__icon"></i>
                </a>
                <a href="#" class="social__icon-wrapper social__icon-wrapper--outline">
                    <i class="fa-brands fa-facebook-f social__icon"></i>
                </a>
                <a href="#" class="social__icon-wrapper social__icon-wrapper--outline">
                    <i class="fa-brands fa-linkedin-in social__icon"></i>
                </a>
            </div>
        </div>

    </header>