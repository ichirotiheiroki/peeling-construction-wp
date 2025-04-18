<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peeling-construction.az
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peeling Construction</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
            rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css?ver=14" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=18" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid     top-bar-bg px-0">
    <div class="row g-0 d-none d-lg-flex">
        <div class="col-lg-6 ps-5 text-start">
            <div class="h-100 d-inline-flex align-items-center text-white">

<!--                <span>Follow Us:</span>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>-->
      </div>
        </div>
        <div class="col-lg-6 text-end">
            <a href="tel:+994 55 254 44 45" class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i><?php echo t('contact_us'); ?></span>
                <span class="fs-5 fw-bold">+994 55 254 44 45
</span>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="<?php echo pll_home_url(); ?>#" class="navbar-brand">
        <img class="navbar-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg?ver=15" alt="">
        <img class="navbar-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo-vector.svg?ver=15" alt="">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0 align-items-center">
            <a href="<?php echo pll_home_url(); ?>#about" class="nav-item nav-link"><?php echo t('about_us'); ?></a>
            <a href="<?php echo pll_home_url(); ?>#service" class="nav-item nav-link"><?php echo t('solutions'); ?></a>
            <?php
            $projects_page_id = get_page_by_path('projects-list')->ID;
            $translated_url = get_permalink(pll_get_post($projects_page_id));
            ?>
            <a href="<?php echo $translated_url; ?>" class="nav-item nav-link"><?php echo t('projects'); ?></a>
            <a href="#contact" class="nav-item nav-link"><?php echo t('contacts'); ?></a>

            <div class="flex px-3 gap-2">
                <?php
                if (function_exists('pll_the_languages')) {
                    pll_the_languages(array(
                        'show_flags' => 1,
                        'show_names' => 0,
                        'hide_current' => 0,
                        'display_names_as' => 'name',
                        'raw' => 0
                    ));
                }
                ?>
            </div>
        </div>

        <a href="<?php echo pll_home_url(); ?>#contact" class="btn btn-primary px-3 d-none d-lg-block"><?php echo t('consultation'); ?></a>
    </div>
</nav>

<!-- Navbar End -->
