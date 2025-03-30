<?php get_header(); ?>

<div class="main-content">
    <h1>House Music, Soulful Vibes, Timeless Beats.</h1>
</div>

<div class="posts-container">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>