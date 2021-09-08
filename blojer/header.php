<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_search_form(); ?>

    <!-- Nav start -->
    <nav id="main-nav" class="relative overflow-hidden w-screen bg-indigo-900 flex justify-between md:items-center items-start md:pt-0 pt-7 md:px-20 px-10">
        <!-- Navbar trade start -->
        <div class="font-bold md:text-2xl text-xl text-white hover:text-gray-200 hover:underline">
            <a href="<?php echo home_url(); ?>">
                <?php echo get_theme_mod("set_logo_title") ?>
            </a>
        </div>
        <!-- Navbar trade end -->
        <!-- Main navbar menu start -->
        <?php wp_nav_menu(
            array(
                "theme_location" => "my_main_menu",
                "container" => "ul",
                "after" => "<li class='search-icon'>
                                <button id='search-btn-1'>    
                                    <!-- Search icon start -->
                                    <svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' viewBox='0 0 20 20' fill='currentColor'>
                                        <path fill-rule='evenodd' d='M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z' clip-rule='evenodd' />
                                    </svg>
                                    <!-- Search icon end -->
                                </button>
                            </li>"
            )
        ); ?>
        <!-- Main navbar menu end -->
    
        <!-- Mobile - responsive navbar menu start -->
        <ul class="flex flex-row md:hidden">
            <li class="px-4 md:text-xl text-lg text-red-300 hover:text-red-600 rounded-full flex justify-center items-center">
                <a href="#" id="search-btn-2">
                    <!-- Search icon start -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <!-- Search icon end -->
                </a>
            </li>
            <li class=" md:text-xl text-lg text-red-300 hover:text-red-600 rounded-full flex justify-center items-center">
                <button id="menu-button">
                    <!-- Menu icon start -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- Menu icon end -->
                </button>
            </li>
        </ul>
        <!-- Mobile - responsive navbar menu end -->
    </nav>
    <!-- Nav end -->