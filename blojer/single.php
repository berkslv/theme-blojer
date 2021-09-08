<?php get_header(); ?>

<section id="blog-posts">
    <?php
    // If there are any posts
    if (have_posts()) :
        // While have posts, show them to us
        while (have_posts()) : the_post();

            // Require the file which is at template-parts/content.php (by default)
            get_template_part('template-parts/content', "single");

        endwhile;
    else :
    ?>

        <p><?php _e('There is nothing yet to be displayed!', 'learnwp'); ?></p>

    <?php endif; ?>
</section>


<div class="mx-auto h-0.5 bg-gray-200 flex justify-center items-center" style="width: 80vw;">
    <span class="text-gray-300 text-lg">//</span>
</div>

<?php
// Display a comment form if this post is open to comments
if (comments_open() || get_comments_number()) :
    // Display the default comments form, or a custom form (type the custom filename inside the parenthesis).
    // Example: comments_template( 'filename.php' );
    comments_template();
endif;
?>

<?php get_footer(); ?>