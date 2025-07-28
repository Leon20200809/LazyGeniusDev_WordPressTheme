<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P3PMQH2D');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO meta -->
    <title>
        <?php if (is_front_page()) : ?>
            <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>
        <?php else : ?>
            <?php wp_title(''); ?> | <?php bloginfo('name'); ?>
        <?php endif; ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Canonical -->
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">

    <!-- OGP -->
    <meta property="og:title" content="<?php wp_title(''); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url()); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('/images/og-image.jpg')); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php wp_title(''); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_theme_file_uri('/images/og-image.jpg')); ?>">

    <!-- Favicon -->
    <link rel="icon" href="<?= esc_url(get_theme_file_uri('/favicon.ico')) ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= esc_url(get_theme_file_uri('/images/apple-touch-icon.png')) ?>">

    <!-- Google Fonts (高速化用にpreconnect追加) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3PMQH2D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="site-header">
    <di class="container">
        <a href="<?= home_url() ?>">
            <div class="logo">
                <img src="<?= esc_url(get_theme_file_uri('/images/sitelogo2.png')) ?>" alt="site-logo">
            </div>
        </a>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="site-nav">
            <ul>
                <?php if (is_front_page()) : ?>
                    <li><a href="#">Home</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                <?php else : ?>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo home_url(); ?>/#skills">Skills</a></li>
                    <li><a href="<?php echo home_url(); ?>/#works">Works</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                    <li><a href="<?php echo home_url(); ?>/#contact">Contact</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
