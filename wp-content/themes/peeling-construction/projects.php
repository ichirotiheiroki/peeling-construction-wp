<?php
/*
Template Name: Projects Page
*/



get_header();
?>

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
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' =>'',
                    'post_type' => 'projects',
                    'suppress_filters' => true,
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>


                    <a href="<?php echo get_permalink(); ?>" class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
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
        </div>
    </div>
    <!-- Service End -->

<?php
get_footer();
