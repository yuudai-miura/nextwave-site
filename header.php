<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com'); ?>
    <?php wp_enqueue_style('gstatic-fonts', 'https://fonts.gstatic.com'); ?>
    <?php wp_enqueue_style('noto-sans-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap'); ?>
    <?php wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css'); ?>
    <?php wp_enqueue_style('single-css', get_template_directory_uri() . '/css/single.css'); ?>
    <?php wp_enqueue_style('archive-css', get_template_directory_uri() . '/css/archive.css'); ?>
    <?php wp_enqueue_style('404-css', get_template_directory_uri() . '/css/404.css'); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="nav_header">
        <div class="header_inner">
            <div class="header_logo">
                <a href="<?php echo home_url('/'); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
            </div>
            <button class="hamburger_btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="header_nav">
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">トップ<br>TOP</a></li>
                    <li><a href="<?php echo home_url('/category/wordpress/'); ?>">お知らせ<br>NEWS</a></li>
                    <li><a href="<?php echo home_url('/company/'); ?>">会社概要<br>COMPANY</a></li>
                    <li><a href="<?php echo home_url('/service/'); ?>">サービス<br>SERVICE</a></li>
                    <li><a href="<?php echo home_url('/recruit/') ?>">採用情報<br>RECRUIT</a></li>
                </ul>
                 <div class="header_contact">
                <a href="<?php echo home_url('/contact/') ?>" class="button">お問い合わせ</a>
            </div>
            </nav>
           
        </div>
            <div class="header_bar"></div>

    </header>