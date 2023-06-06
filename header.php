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
                    <a class="nav__a" href="<?php echo site_url('/') ?>">Home</a>
                </li>
                <li class="nav__li" <?php
                                        if (is_page('about') or wp_get_post_parent_id(0) === 5) echo 'class="nav__selected"'
                                        ?>>
                    <a class="nav__a" href="<?php echo site_url('/about') ?>">About</a>
                </li>
                <li class="nav__li" <?php
                                        if (is_page('coaching') or wp_get_post_parent_id(0) === 14) echo 'class="nav__selected"'
                                        ?>>
                    <a class="nav__a" href="<?php echo site_url('/coaching') ?>">Coaching</a>
                </li>
                <li class="nav__li" <?php
                                        if (is_page('contact') or wp_get_post_parent_id(0) === 16) echo 'class="nav__selected"'
                                        ?>>
                    <a class="nav__a" href="<?php echo site_url('/contact') ?>">Contact</a>
                </li>

            </ul>
        </nav>

    </header>