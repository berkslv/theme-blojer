<?php get_header(); ?>

<section id="blog-posts">

    <div class="bg-indigo-900 text-center py-8">
        <h2 class="pagetitle">
            <span class="font-bold text-red-300 lg:text-3xl md:text-2xl sm:text-xl text-lg">Search:</span>
            <span class="font-semibold text-white lg:text-2xl md:text-xl sm:text-lg text-base">"<?php echo get_search_query(); ?>"</span>
        </h2>
        <h3 class="text-white mt-3">We found <span class="font-bold"><?php $allsearch = new WP_Query("s=$s&showposts=-1");
                                        $count = $allsearch->post_count;
                                        echo $count . ' ';
                                        wp_reset_query(); ?></span> results.</h3>
    </div>

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
            <h4 class="font-bold lg:text-3xl md:text-2xl sm:text-xl text-lg">Nothing was found for "<?php echo get_search_query(); ?>".</h4>
        </div>
    </section>

    <?php endif; ?>

</section>

<?php get_footer(); ?>