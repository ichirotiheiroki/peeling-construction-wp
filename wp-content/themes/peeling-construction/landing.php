<?php
/*
Template Name: Landing Page
*/
?>


<?php


get_header();
?>


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">
                                        Благоустройство и инженерные работы
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Строительно-ремонтные
                                        услуги</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div id="about" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid"
                                 src="<?php echo get_template_directory_uri(); ?>/img/about-1.jpg?ver=15">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid"
                                 src="<?php echo get_template_directory_uri(); ?>/img/about-2.jpg?ver=15">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">О нас
                    </p>
                    <h1 class="display-5 mb-4">Мы Профессионалы Своего Дела</h1>
                    <p class="mb-4">Компания Peeling Construction MMC была основана в 2018 году и с момента своего
                        основания предоставляет услуги в сфере строительства.
                        Наша цель — стать сильным и надежным поставщиком услуг. Высокое качество — наш главный приоритет
                        в областях, комплексах и проектах, требующих особого подхода и обслуживания клиентов. Наши
                        услуги включают в себя ремонт, строительство с нуля, сантехнические, электромонтажные,
                        кровельные и фасадные работы
                        и т. д., все из которых выполняются нашей компанией профессионально.

                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Строительно-монтажные работы</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Ремонтно-строительные работы</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Благоустройство и реконструкция зданий</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Работы по кондиционированию и вентиляции</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Отделочные работы</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Гидроизоляционные работы</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Благоустройство прилегающих территорий</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Строительство частных домов, квартир и
                                офисов</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Комплексное выполнение
                                ремонтно-строительных работ</p>
                        </div>

                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Напишите нам</p>
                                    <a class="mb-0" href="mailto:info@peeling.az">info@peeling.az</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Позвоните нам</p>
                                    <a class="mb-0" href="tel:+994552544445">+994 55 254 4445
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5">Наши партнёры</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/1.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/2.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/3.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/4.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/5.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/11.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/6.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/7.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/8.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/9.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid   mx-auto mb-5"
                             src="<?php echo get_template_directory_uri(); ?>/img/partners/10.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">7</h1>
                    <span class="fs-5 fw-semi-bold text-white">Лет Опыта</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">148</h1>
                    <span class="fs-5 fw-semi-bold text-white">Сотрудников</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">57</h1>
                    <span class="fs-5 fw-semi-bold text-white">Довольных клиентов</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">82</h1>
                    <span class="fs-5 fw-semi-bold text-white">Завершённых проектов</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div id="service" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/img/feature.jpg"
                             alt="">
                        <span
                                class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                                style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="<?php echo get_template_directory_uri(); ?>/https://www.youtube.com/embed/DWRcNpR6Kdc"
                                data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!--                    <p class="fw-medium text-uppercase text-primary mb-2">Почему мы</p>-->
                    <h2 class="display-5 mb-4">Преимущества нашей компании:
                    </h2>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Многолетний опыт </h4>
                                    <span>Наша компания уже много лет успешно работает на рынке строительства, предоставляя услуги высокого качества как для частных клиентов, так и для крупных организаций.
</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Точность и результативность</h4>
                                    <span>Мы гарантируем точное соблюдение сроков выполнения работ и всегда нацелены на достижение максимальных результатов, удовлетворяющих потребности наших клиентов.
</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Гарант качества</h4>
                                    <span>Мы используем только проверенные и высококачественные материалы, что позволяет нам обеспечивать долговечность и надежность каждого объекта.
</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Опытные квалифицированные специалисты</h4>
                                    <span>Наши специалисты — это опытные профессионалы, которые постоянно совершенствуют свои знания и навыки, чтобы предложить вам самые эффективные решения.
</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Репутация и доверие</h4>
                                    <span>Мы гордимся своей репутацией и множеством успешных проектов, которые стали залогом доверия наших клиентов и партнёров.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="<?php echo get_template_directory_uri(); ?>/"
                                id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Project Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-white mb-2">Виды услуг</p>
            <h1 class="display-5 text-white mb-5">Перечень услуг предоставляемых нашей компанией</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Центр отдыха "Хазри"</h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Шоколадная Фабрика "Гала"
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Си Бриз Фанзкартинг
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Си Бриз Фанзкартинг
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Детский сад № 319
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/6.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Рендеры проектов
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/7.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Рендеры проектов
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/8.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Работы по реконструкции в городе "Лачын"
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/9.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Ландшафт и экстерьеры
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/10.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Ландшафт и экстерьеры
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/11.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Ландшафт и экстерьеры
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/12.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Реставрация фасадов
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/13.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Монтаж и демонтаж строительных лесов
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/14.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Строительство жилых и нежилых высокоэтажных зданий
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/15.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Установка систем кондиционирования и вентиляции
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/16.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Котлованные работы
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/17.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Электрика

                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/18.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Транспортировка
                    </h5>
                </div>
            </a>
            <a class="project-item">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/projects/19.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-white mb-0 z-3">Водоснабжение и канализационные системы
                    </h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Project End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Наши проекты</p>
                <h1 class="display-5 mb-4">Проекты выполненные нашей компанией</h1>
            </div>
            <div class="row gy-5 gx-4">
                <?php

                // параметры по умолчанию
                $my_posts = get_posts(array(
                    'numberposts' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'projects',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>


                    <a href="<?php echo get_permalink(); ?>" class="col-md-6 col-lg-4 wow fadeInUp"
                       data-wow-delay="0.1s">
                        <div class="service-item">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'img-fluid ratio ratio-1x1 object-fit-cover']); ?>
                            <div class="service-img">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0"><?php the_title(); ?></h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text text-white">
                                    <p class="text-white mb-0"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <!--                        <a class="btn btn-light" href="">Read More</a>-->
                        </div>
                    </a>

                    <?php


                }

                wp_reset_postdata(); // сброс

                ?>
            </div>
            <div class="flex justify-content-center">
                <a class="btn btn-primary py-3 px-5" href="/projects-list">Больше проектов</a>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <!--  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/team-1.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                 style="height: 90px;">
                                <h5>Rob Miller</h5>
                                <span class="text-primary">CEO & Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/team-2.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                 style="height: 90px;">
                                <h5>Adam Crew</h5>
                                <span class="text-primary">Project Manager</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/team-3.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                 style="height: 90px;">
                                <h5>Peter Farel</h5>
                                <span class="text-primary">Engineer</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Team End -->


<?php
get_footer();
