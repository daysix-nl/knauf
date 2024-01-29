<?php
/**
 * Template name: Strategische producten
 */


 get_header(); ?>
<?php
$current_user_id = get_current_user_id();
?>
<main>
    <div class="px-0 md:px-2 max-w-[1200px] mx-auto">
        <?php
        if( have_rows('productgroep', 'option') ):
            while( have_rows('productgroep', 'option') ) : the_row(); ?>
            <div class="pb-[20px]">
                <h2 class="text-24 leading-24 text-[#001A4C] mb-2 px-2 md:px-0"><?php the_sub_field('titel', 'option');?></h2>
                <div class="overflow-x-auto pb-[30px]">
                    <div class="flex">
                        <div class="w-[30%] bg-[#F0F0F1] p-[10px] text-11 uppercase text-[#001A4C] mr-[2px] min-w-[200px] font-medium">Productcategorie</div>
                        <div class="w-[55%] bg-[#F0F0F1] p-[10px] text-11 uppercase text-[#001A4C] mr-[2px] min-w-[320px] font-medium">Productomschrijving</div>
                        <div class="w-[15%] bg-[#F0F0F1] p-[10px] text-11 uppercase text-[#001A4C] min-w-[150px] font-medium">Artikelnummer</div>
                    </div>
                    <?php
                    if( have_rows('product', 'option') ):
                        while( have_rows('product', 'option') ) : the_row(); ?>
                         <div class="flex">
                            <div class="w-[30%] px-[10px] py-[5px] text-15 text-[#001A4C] mr-[2px] min-w-[200px] font-light border-b-[1px] border-[#F0F0F1]"><?php the_sub_field('productcategorie', 'option');?></div>
                            <div class="w-[55%] px-[10px] py-[5px] text-15 text-[#001A4C] mr-[2px] min-w-[320px] font-light border-b-[1px] border-[#F0F0F1]"><?php the_sub_field('productomschrijving', 'option');?></div>
                            <div class="w-[15%] px-[10px] py-[5px] text-15 text-[#001A4C] min-w-[150px] font-light border-b-[1px] border-[#F0F0F1]"><?php the_sub_field('artikelnummer', 'option');?></div>
                        </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                 </div>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</main>
<?php get_footer('nofooter'); ?>



