<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package peeling-construction.az
 */

get_header();
?>

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Страница не найдена</h1>
                    <p class="mb-4">К сожалению, страница, которую вы искали, не существует на нашем сайте! </p>
                    <a class="btn btn-primary py-3 px-5" href="/">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

<?php
get_footer();
