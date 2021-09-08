<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>
<!-- Comments start -->
<section class="py-20">
    <?php if (have_comments()) : ?>
        <!-- Comments header start -->
        <div class="text-center mt-12 mb-6">
            <h3 class="lg:text-5xl md:text-4xl text-3xl font-bold">Comments</h3>
        </div>
        <!-- Comments header end -->
        <div class="flex justify-center">
            <div class="lg:w-7/12 md:w-8/12 w-10/12">

                <?php
                wp_list_comments(array(
                    'style'       => 'div',
                    "walker"      => new comment_walker(),
                    'short_ping'  => true,
                    'avatar_size' => 42,
                ));
                ?>

                <?php the_comments_navigation(); ?>

            </div>
        </div>


    <?php endif; // Check for have_comments(). 
    ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'learnwp'); ?></p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply_before' => '<div class="flex flex-col text-center w-full mb-6"><h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h2>',
    ));
    ?>

</section>
<!-- Comments end -->