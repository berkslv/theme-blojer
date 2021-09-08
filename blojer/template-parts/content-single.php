<!-- Header start -->
<section class="">
    <div class="text-center w-full bg-indigo-900 py-12">
        <!-- Categories start -->
        <div class="md:text-lg text-base font-semibold mb-4">
            <h3 class="text-red-400 hover:text-red-500 inline px-3 underline">
				<?php if(has_category()):?>
                    <?php the_category('</h3><h3 class="text-red-400 hover:text-red-500 inline px-3 underline">'); ?>
				<?php endif;?>
            </h3>
        </div>
        <!-- Categories end -->
        <!-- Title start -->
        <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-white">
            <?php the_title(); ?>
        </h1>
        <!-- Title end -->
        <!-- Date start -->
        <div class="mt-3 flex justify-center items-center font-semibold text-gray-300">
            <!-- Date icon start -->
            <svg xmlns="http://www.w3.org/2000/svg" class="md:h-5 h-4 md:w-5 w-4 mr-1" viewBox="0 0 24 24" fill="#d1d5db">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zm0-12H5V5h14v2zM7 11h5v5H7z" />
            </svg>
            <!-- Date icon end -->
            <a href="<?php the_permalink(); ?>" class="hover:underline md:text-base text-sm">
                <time><?php echo get_the_date(); ?></time>
            </a>
        </div>
        <!-- Date end -->
    </div>
</section>
<!-- Header end -->
<section class="md:py-20 pt-6 pb-12 mx-auto blog-post">
    <!-- Header image start -->
    <div class="mt-3">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="blog image" class="mx-auto object-cover object-center" id="blog-image">
        <?php endif; ?>
    </div>
    <!-- Header image end -->
    <!-- Content preview start -->
    <div class="md:px-10 px-3 md:py-16 py-10 text-lg">
        <?php the_content(); ?>
    </div>
    <!-- Content preview end -->
</section>