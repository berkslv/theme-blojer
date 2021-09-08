<?php get_header(); ?>

<!-- Blog posts start -->
<section id="blog-posts">
    <!-- Blog start -->
    <section class="md:py-20 py-12 mx-auto blog-post">
        <?php

        // If there are any posts
        if (have_posts()) :
            // While have posts, show them to us
            while (have_posts()) : the_post();

                // Require the file which is at template-parts/content.php (by default)
                get_template_part('template-parts/content', get_post_format());

            endwhile;
        else :
        ?>

            <p><?php _e('There is nothing yet to be displayed!', 'learnwp'); ?></p>

        <?php endif; ?>

    </section>
</section>
<!-- Blog posts end -->

<?php get_footer(); ?>