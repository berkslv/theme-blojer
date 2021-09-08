<?php get_header(); ?>

<section id="blog-posts">
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


        <section>
            <div class="w-full h-screen flex justify-center items-center">
                <h4 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-lg">Nothing was found.</h4>
            </div>
        </section>

    <?php endif; ?>

    <section class="md:py-20 py-12 mx-auto blog-post">
        <div class="flex justify-between">
            <div class="pagination-anchors">
                <?php previous_posts_link("<< Newer posts"); ?>
            </div>
            <div class="pagination-anchors">
                <?php next_posts_link("Older posts >>") ?>
            </div>
        </div>
    </section>

</section>

<?php get_footer(); ?>