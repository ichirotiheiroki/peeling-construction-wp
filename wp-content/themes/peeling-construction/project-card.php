<a href="<?php echo get_permalink(); ?>" class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item">
        <?php
        $thumbnail_id = get_the_ID();

        $thumbnail_url = get_the_post_thumbnail_url($thumbnail_id, 'full');

        if (!$thumbnail_url) {
            $thumbnail_url = get_template_directory_uri() . '/img/projects-placeholder.jpg';
        }

        echo '<img src="' . esc_url($thumbnail_url) . '" class="img-fluid ratio ratio-1x1 object-fit-cover" alt="' . esc_attr(get_the_title()) . '">';
        ?>

        <div class="service-img">
            <?php
            $second_thumbnail_url = get_the_post_thumbnail_url($thumbnail_id, 'thumbnail');

            if (!$second_thumbnail_url) {
                $second_thumbnail_url = get_template_directory_uri() . '/img/projects-placeholder.jpg';
            }

            echo '<img src="' . esc_url($second_thumbnail_url) . '" class="img-fluid" alt="' . esc_attr(get_the_title()) . '">';
            ?>
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
    </div>
</a>
