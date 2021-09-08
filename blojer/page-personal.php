<?php get_header(); ?>

<section id="blog-posts">
    <?php

    // If there are any posts
    if (have_posts()) :
        // While have posts, show them to us
        while (have_posts()) : the_post();

            // Require the file which is at template-parts/content.php (by default)
            get_template_part('template-parts/content', "personal");

        endwhile;
    else :
    ?>

        <p><?php _e('There is nothing yet to be displayed!', 'learnwp'); ?></p>

    <?php endif; ?>

</section>

<?php get_footer(); ?>