<?php
/*
Template Name: Projects List Page
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
                    'order' => 'ASC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => 'order_value',
                    'orderby' => 'meta_value_num',
                    'post_type' => 'projects',
                    'suppress_filters' => true,
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );

                    get_template_part('./project-card');

                }

                wp_reset_postdata(); // сброс

                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->

<?php
get_footer();
