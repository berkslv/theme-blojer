<?php get_header(); ?>

<section>
    <div class="w-screen h-screen bg-red-100 flex justify-center items-center flex-col">
        <h1 class="lg:text-6xl md:text-5xl sm:text-4xl text-3xl font-mono">404!</h1>
        <h2 class="lg:text-5xl md:text-4xl sm:text-3xl text-2xl mt-5 text-gray-700">Are you lost?</h2>
        <a href="<?php echo home_url(); ?>" class="px-6 py-4 md:text-2xl text-xl bg-indigo-700 mt-6 border-2 border-black text-indigo-50">Go home</a>
    </div>
</section>

<?php get_footer(); ?>