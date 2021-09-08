<!-- Search start -->
<section id="search-section" class="w-screen overflow-hidden px-8 bg-gray-600 flex justify-center items-center">
    <div class="rounded-md p-7 bg-gray-200 text-center">
        <h1 class="font-semibold text-lg mb-2">Search</h1>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text" placeholder="Search something" value="<?php echo get_search_query(); ?>" name="s" class="mr-3 px-8 py-3 rounded-md bg-white">
            <button type="submit" class="px-8 py-3 mt-5 mx-2 bg-indigo-600 text-indigo-100 rounded-md">Go!</button>
        </form>
        <button id="search-btn-cancel" class="px-10 py-2 mt-5 mx-2 bg-red-400 text-red-100 rounded-md">Cancel</button>
    </div>
</section>
<!-- Search end -->