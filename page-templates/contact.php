<?php
/**
 * Template name: Contact
 */


 get_header(); ?>
<?php
$current_user_id = get_current_user_id();
?>
<main>
    <div class="px-2 max-w-[800px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <?php 
            // Haal de repeater velden op voor de ingelogde gebruiker
            $cta_repeater_values = get_field('cta', 'user_' . $current_user_id);
            // Loop door de repeater velden en toon de waarden
            if( $cta_repeater_values ):
            foreach( $cta_repeater_values as $cta_item ):
                $cta_cta_id = $cta_item['cta_cta'];
                $e_mailadres = get_field('e_mailadres', $cta_cta_id);
                $mobiel_telefoonnummer = get_field('mobiel_telefoonnummer', $cta_cta_id);
                $algemeen_telefoonnummer = get_field('algemeen_telefoonnummer', $cta_cta_id);
                $werkdagen = get_field('werkdagen', $cta_cta_id);
                $post_title = get_the_title($cta_cta_id);
                $post_thumbnail = get_the_post_thumbnail_url($cta_cta_id); ?>
                <!-- ACCOUNT MANAGER -->
                <div class="w-full schaduw">
                    <div class="flex px-[25px] pt-[30px] items-center">
                        <div class="h-[80px] w-[80px] rounded-full bg-[#009FE3] overflow-hidden">
                            <img src="<?php echo $post_thumbnail ?>" alt="" class="min-h-full min-w-full object-center object-cover">
                        </div>
                        <div class="ml-2">
                            <h2 class="text-24 leading-24 text-[#001A4C]"><?php echo $post_title ?></h2>
                            <p class="text-14 leading-14 text-[#B3BAC9] font-light mt-[15px]">Werkdagen: <?php echo $werkdagen ?></p>
                        </div>
                    </div>
                    <div class="px-[25px] py-[30px] grid gap-1">
                        <a href="tel:<?php echo  $mobiel_telefoonnummer ?>" class="text-[#009FE3]">
                            <div class="flex">
                                <div class="h-[24px] w-[24px]">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LocalPhoneOutlinedIcon"><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z"></path></svg>
                                </div>
                                <div class="ml-1">
                                    <p><?php echo  $mobiel_telefoonnummer ?></p>
                                </div>
                            </div>
                        </a>
                        <a href="mailto:<?php echo  $e_mailadres ?>" class="text-[#009FE3]">
                            <div class="flex">
                                <div class="h-[24px] w-[24px]">
                                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="EmailOutlinedIcon"><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"></path></svg>
                                </div>
                                <div class="ml-1">
                                    <p><?php echo  $e_mailadres ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            endforeach;
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer('nofooter'); ?>



