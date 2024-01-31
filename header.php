<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preload" as="font" href="/wp-content/themes/knauf/fonts/FuturaPT-Medium.woff2" type="font/woff2" crossorigin="anonymous">
    <!-- <link rel="preload" as="font" href="/wp-content/themes/knauf/fonts/FuturaStd-Book.woff2" type="font/woff2" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page-block knauf' ); ?>>
<header class="w-full border-b-[1px] border-[#979797] fixed top-0 bg-white">
    <div class="pl-[20px] lg:pl-[80px] h-[68px] md:h-[64px] flex items-center justify-between">
        <div class="flex h-[68px] md:h-[64px] items-center lg:hidden">
            <button id="hb" class="h-[45px] w-[45px] rounded-full hover:bg-[#001a4c0d] mr-[15px] flex items-center justify-center">
               <svg class="h-[24px]" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="MenuIcon"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            </button>
             <a href="/"><img src="/wp-content/themes/knauf/img/local/knauf-logo-1.jpeg" alt="" class="h-[50px] mr-[20px]"></a>
        </div>
        <div class="items-center hidden lg:flex">
            <a href="/"><img src="/wp-content/themes/knauf/img/local/knauf-logo-1.jpeg" alt="" class="h-[50px] mr-[20px]"></a>
            <!-- <a href="/" class="px-[18px] h-[64px] hover:bg-[#001a4c0d] flex items-center font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Dashboard</a> -->
            <a href="/" class="px-[18px] h-[64px] hover:bg-[#001a4c0d] flex items-center font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Mijn programma</a>
            <a href="/downloads" class="px-[18px] h-[64px] hover:bg-[#001a4c0d] flex items-center font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Downloads</a>
            <a href="/strategische-producten" class="px-[18px] h-[64px] hover:bg-[#001a4c0d] flex items-center font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Strategische producten</a>
            <a href="/trainingen" class="px-[18px] h-[64px] hover:bg-[#001a4c0d] flex items-center font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Trainingen</a>
            <a href="/contact" class="px-[18px] h-[64px] hover:bg-[#001a4c0d] flex items-center font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Contact</a>
        </div>
     
        <a href="/wp-login.php?action=logout" class="mr-[40px] lg:mr-[80px] duration-300 h-[35px] w-[35px] rounded-full hover:bg-[#001a4c0d] flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z"/></svg>
        </a>
    </div>
</header>
<section>
    <div class="container text-center mt-[118px] md:mt-[114px] mb-[40px]">
        <h1 class="font-futura text-36 leading-36 font-medium text-[#001A4C]"><?php the_title();?></h1>
    </div>
</section>

<div id="hb-overlay" class="w-[300px] h-[calc(100dvh-68px)] md:h-[calc(100dvh-68px)] lg:hidden bg-[#f2f3f6] close fixed top-[69px] md:top-[65px] z-[99]">
    <div class="grid grid-cols-1 pt-[30px] gap-3 pl-3">
        <a href="/" class="font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Mijn programma</a>
        <a href="/downloads" class="font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Downloads</a>
        <a href="/strategische-producten" class="font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Strategische producten</a>
        <a href="/trainingen" class="font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Trainingen</a>
        <a href="/contact" class="font-open text-16 text-[#334870] font-medium tracking-[0.01em]">Contact</a>
    </div>
</div>


<script>
    document.getElementById("hb").addEventListener("click", function() {
        var hbOverlay = document.getElementById("hb-overlay");
        hbOverlay.classList.toggle("close");
        hbOverlay.classList.toggle("active");
    });
</script>