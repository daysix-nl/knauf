<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header('notitle'); ?>
<main>
    <div class="px-2 w-full max-w-[750px] mx-auto">
        <h2 class="text-24 leading-24 text-[#001A4C]"><?php the_field('subtitel');?></h2>
        <div class="text-editor mt-[20px] mb-[40px] font-light text-[#001A4C]">
            <?php the_field('tekst');?>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="w-full min-h-[250px] bg-black overflow-hidden order-2 md:order-1">
                <img src="<?php the_post_thumbnail_url();?>" alt="" class="w-full min-h-full object-center object-cover bg-[#B3BAC9]">
            </div>
            <div class="w-full min-h-[250px] bg-[#009FE3] px-[25px] py-[30px] order-1 md:order-2">
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 leading-18">Duur</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('duur');?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 lleading-18">Locatie</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('locatie');?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 leading-18">Max. aantal deelnemers</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('max_aantal_deelnemers');?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 leading-18">Waarde</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('waarde');?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 leading-18">Kosten</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('kosten');?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
            </div>
        </div>
        <div class="mt-[30px]">
            <?php echo do_shortcode( '[gravityform id="3" title="false"]' ); ?>
        </div>
        <a href="/trainingen" class="flex mt-[50px] justify-center">
            <div class="h-[24px] w-[24px] flex items-center">
                <svg class="rotate-[-180deg]" width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" fill="#009FE3" fill-rule="nonzero">
                            <polygon id="Path" points="8 0 6.59 1.41 12.17 7 0 7 0 9 12.17 9 6.59 14.59 8 16 16 8"></polygon>
                        </g>
                    </g>
                </svg>
            </div>
            <p class="font-medium text-[#009FE3] ml-[10px]">Alle trainingen</p>
        </a>
    </div>
</main>
<?php get_footer(); ?>
