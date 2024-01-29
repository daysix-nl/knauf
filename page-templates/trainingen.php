<?php
/**
 * Template name: Trainingen
 */


 get_header(); ?>
<?php
$current_user_id = get_current_user_id();
?>
<main>
    <div class="px-2 w-full max-w-[1200px] mx-auto">
        <!-- <?php the_field('doel_1', 'user_' . $current_user_id); ?> -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'training',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                <a href="<?php the_permalink();?>" class="w-full h-auto border-[1px] border-[#B3BAC9]">
                    <div class="w-full aspect-[16/12] overflow-hidden">
                        <img src="<?php the_post_thumbnail_url();?>" alt="" class="w-full min-h-full object-center object-cover bg-[#B3BAC9]">
                    </div>
                    <div class="px-[20px] py-[30px] flex flex-col justify-between">
                        <div class="">
                            <h2 class="text-22 leading-22 text-[#001A4C]"><?php the_title();?></h2>
                            <p class="text-[#B3BAC9] font-light mt-[15px] line-clamp-1"><?php the_field('subtitel');?></p>
                        </div>
                        <div class="flex mt-[30px]">
                            <p class="font-medium text-[#009FE3] mr-[10px]">Meer informatie</p>
                            <div class="h-[24px] w-[24px] flex items-center">
                                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Group" fill="#009FE3" fill-rule="nonzero">
                                            <polygon id="Path" points="8 0 6.59 1.41 12.17 7 0 7 0 9 12.17 9 6.59 14.59 8 16 16 8"></polygon>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</main>
<?php get_footer('nofooter'); ?>



