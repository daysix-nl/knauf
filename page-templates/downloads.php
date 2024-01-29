<?php
/**
 * Template name: Downloads
 */


 get_header(); ?>
<?php
$current_user_id = get_current_user_id();
?>
<main>
    <div class="px-2 max-w-[680px] mx-auto">
        <!-- <?php the_field('doel_1', 'user_' . $current_user_id); ?> -->
        <div class="pb-5">
            <h2 class="text-24 leading-24 text-[#001A4C] mb-3">Mijn downloads</h2>
            <div class="border-b-[1px] border-[#e6e8ed]"></div>
            <?php
            if( have_rows('persoonlijke_download', 'user_' . $current_user_id) ):
                while( have_rows('persoonlijke_download', 'user_' . $current_user_id) ) : the_row(); ?>
                 <a href="<?php the_sub_field('bestand');?>" class="hover:bg-[#f2f4f6] flex items-center justify-between border-b-[1px] border-[#e6e8ed] py-2" target="_blank">
                    <div class="mx-[15px]">
                        <h3 class="text-18 leading-18 font-open font-medium text-[#001A4C]"><?php the_sub_field('titel');?></h3>
                    </div>
                    <div class="mx-[15px] h-[24px] w-[24px]">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1x59gun" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="DownloadIcon"><path d="M5 20h14v-2H5v2zM19 9h-4V3H9v6H5l7 7 7-7z"></path></svg>
                    </div>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="">
            <h2 class="text-24 leading-24 text-[#001A4C] mb-3">Algemene downloads</h2>
            <div class="border-b-[1px] border-[#e6e8ed]"></div>
            <?php
            if( have_rows('download', 'option') ):
                while( have_rows('download', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('bestand', 'option');?>" class="hover:bg-[#f2f4f6] flex items-center justify-between border-b-[1px] border-[#e6e8ed] py-2" target="_blank">
                    <div class="mx-[15px]">
                        <h3 class="text-18 leading-18 font-open font-medium text-[#001A4C]"><?php the_sub_field('titel', 'option');?></h3>
                    </div>
                    <div class="mx-[15px] h-[24px] w-[24px]">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1x59gun" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="DownloadIcon"><path d="M5 20h14v-2H5v2zM19 9h-4V3H9v6H5l7 7 7-7z"></path></svg>
                    </div>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer('nofooter'); ?>



