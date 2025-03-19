<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peeling-construction.az
 */

?>

<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5 justify-content-between">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Наш офис</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Aşıq Molla Cümə kü 44,
                    MTK Plaza mərtəbə 3
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+994 55 254 44 45
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@peeling.az</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Новостная рассылка</h5>
                <p>Подпишитесь на наши новостные обновления</p>
                <div class="position-relative w-100">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                           placeholder="Введите почтовый адрес">
                    <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container text-center">
        <p class="mb-2">Copyright &copy; <a class="fw-semi-bold" href="#">Peeling Construction</a>, All Right Reserved.
        </p>

    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/wow/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>