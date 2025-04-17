<a class="project-item">
    <?php
    $thumbnail_id = get_the_ID();

    $thumbnail_url = get_the_post_thumbnail_url($thumbnail_id, 'full');

    if (!$thumbnail_url) {
        $thumbnail_url = get_template_directory_uri() . '/img/projects-placeholder.jpg';
    }

    echo '<img src="' . esc_url($thumbnail_url) . '" class="img-fluid" alt="' . esc_attr(get_the_title()) . '">';
    ?>
    <div class="project-title">
        <h5 class="text-white mb-0 z-3"><?php the_title(); ?></h5>
    </div>
</a>