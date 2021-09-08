<section class="md:py-20 py-12 mx-auto blog-post">
	<div <?php post_class("text-center w-full"); ?>>
		<div class="md:text-lg text-base font-semibold mb-4">
			<h3 class="text-red-400 hover:text-red-500 inline px-3 underline">
				<?php if(has_category()):?>
					<?php the_category('</h3><h3 class="text-red-400 hover:text-red-500 inline px-3 underline">'); ?>
				<?php endif;?>
			</h3>
		</div>
		<h1 class="lg:text-4xl md:text-3xl text-2xl font-bold hover:underline">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<div class="mt-3 flex justify-center items-center font-semibold text-gray-500">
			<svg xmlns="http://www.w3.org/2000/svg" class="md:h-5 h-4 md:w-5 w-4 mr-1" viewBox="0 0 24 24" fill="#6B7280">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zm0-12H5V5h14v2zM7 11h5v5H7z" />
			</svg>
			<a href="<?php the_permalink(); ?>" class="hover:underline md:text-base text-sm">
				<time><?php echo get_the_date(); ?></time>
			</a>
		</div>
	</div>
	<div class="mt-7">
		<?php if(has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url() ?>" alt="blog image" class="mx-auto object-cover object-center" id="blog-image">
		<?php endif; ?>
	</div>
	<div class="md:px-10 px-3 md:py-16 py-10 text-lg">
		<?php echo wp_trim_words(get_the_content(), 100); ?>
	</div>
	<div class="flex justify-between items-center flex-row">
		<div class="flex mb-4">
			<button class="px-3 py-2 flex justify-center items-center rounded-md bg-indigo-50 hover:bg-indigo-100">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="#000000">
					<path d="M0 0h24v24H0V0z" fill="none" />
					<path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z" />
				</svg>
				<span class="pl-1 text-black">
					<?php echo get_comments_number( get_the_ID() ) ?>
				</span>
			</button>
		</div>
		<div class="mb-4">
			<a href="<?php the_permalink(); ?>" class="flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 hover:bg-indigo-200 rounded-md">
				Read more
				<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="h-6 w-6 ml-1" viewBox="0 0 24 24" fill="#4F46E5">
					<g>
						<rect fill="none" height="24" width="24" />
					</g>
					<g>
						<g>
							<polygon points="6.41,6 5,7.41 9.58,12 5,16.59 6.41,18 12.41,12" />
							<polygon points="13,6 11.59,7.41 16.17,12 11.59,16.59 13,18 19,12" />
						</g>
					</g>
				</svg>
			</a>
		</div>
	</div>
</section>

<!-- Post divider but not last post -->
<?php
	if (($wp_query->current_post + 1) < ($wp_query->post_count)) {
		echo '
			<!-- Divider start -->
			<div class="mx-auto h-0.5 bg-gray-200 flex justify-center items-center" style="width: 80vw;">
				<span class="text-gray-300 text-lg">//</span>
			</div>
			<!-- Divider end -->
			';
	}
?>