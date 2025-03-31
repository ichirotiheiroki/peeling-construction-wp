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

    <!-- Favicon -->
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="icon">

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
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css?ver=13" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=16" rel="stylesheet">
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
<!--            <div class="h-100 d-inline-flex align-items-center text-white">-->
<!--                <span>Follow Us:</span>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>-->
<!--                <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>-->
<!--            </div>-->
        </div>
        <div class="col-lg-6 text-end">
            <a href="tel:+994 55 254 44 45" class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Позвоните нам:</span>
                <span class="fs-5 fw-bold">+994 55 254 44 45
</span>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->



<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="/#" class="navbar-brand  ">
        <img class="navbar-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg?ver=15" alt="">
        <img class="navbar-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo-vector.svg?ver=15" alt="">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#about" class="nav-item nav-link">О нас</a>
            <a href="#service" class="nav-item nav-link">Решения</a>
<!--            <div class="nav-item dropdown">-->
<!--                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>-->
<!--                <div class="dropdown-menu bg-light m-0">-->
<!--                    <a href="project.html" class="dropdown-item">Projects</a>-->
<!--                    <a href="feature.html" class="dropdown-item">Features</a>-->
<!--                    <a href="team.html" class="dropdown-item">Our Team</a>-->
<!--                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
<!--                    <a href="404.html" class="dropdown-item">404 Page</a>-->
<!--                </div>-->
<!--            </div>-->
            <a href="#contact" class="nav-item nav-link">Контакты</a>
        </div>
        <a href="" class="btn btn-primary px-3 d-none d-lg-block">Получить консультацию</a>
    </div>
</nav>
<!-- Navbar End -->
