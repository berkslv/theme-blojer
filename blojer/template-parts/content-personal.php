 <!-- Header start -->
 <section class="w-full bg-indigo-900">
     <div class="md:py-20 py-12 mx-auto blog-post">
         <div class="text-center w-full">
             <!-- Title start -->
             <h1 class="lg:text-5xl md:text-4xl text-3xl text-white font-bold">
                 About <?php the_title(); ?>
             </h1>
             <!-- Title end -->
         </div>
     </div>
 </section>
 <!-- Header end -->

 <!-- About content start -->
 <section class="w-full">
     <div class="md:py-20 py-12 mx-auto blog-post min-h-screen">
         <?php the_content(); ?>
     </div>
 </section>
 <!-- About content start -->
 