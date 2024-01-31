<?php
/**
 * Template name: Mijn Partner Programma
 */


 get_header(); ?>
<?php
$current_user_id = get_current_user_id();
$current_user = wp_get_current_user();
?>
<main>
    <div class="px-2 max-w-[1200px] mx-auto">
         <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="w-full min-h-[250px] bg-[#009FE3] px-[25px] py-[30px] order-1 md:order-2">
                <h2 class="text-24 leading-24 text-white mb-2">Mijn gegevens</h2>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 leading-18">Bedrijfsnaam</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('bedrijfsnaam', 'user_' . $current_user_id); ?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 lleading-18">Klantnummer</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('klantnummer', 'user_' . $current_user_id); ?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 lleading-18">Partnerschap</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('type_partner', 'user_' . $current_user_id); ?></p>
                </div>
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
                <div class="grid grid-cols-2">
                    <p class="text-white font-light text-14 lleading-18">Budget</p>
                    <p class="text-white font-light text-14 leading-18"><?php the_field('budget', 'user_' . $current_user_id); ?></p>
                </div>
                
                <div class="h-[0.5px] bg-white w-full my-[6px]"></div>
            </div>
            <div class="w-full min-h-[250px] px-[25px]  schaduw py-[30px] order-1 md:order-2">
                <h2 class="text-24 leading-24 text-[#001A4C] mb-2">Mijn marketing activiteiten</h2>
                <p class="font-light text-[#001A4C]"><?php the_field('marketing_activiteiten', 'user_' . $current_user_id); ?></p>
                <?php if (get_field('type_partner', 'user_' . $current_user_id) === "Promotor (Level 1)"): ?>   
                <a href="https://partner.knaufmarketing.nl/marketing-activiteiten/?c=1&voornaam=<?php echo esc_html( $current_user->user_firstname ) ?>&achternaam=<?php echo esc_html( $current_user->user_lastname ) ?>&email=<?php echo esc_html( $current_user->user_email ) ?>">Klik</a>
                <?php endif; ?>
                <?php if (get_field('type_partner', 'user_' . $current_user_id) === "Ambassadeur (Level 2)"): ?>   
                <a href="https://partner.knaufmarketing.nl/marketing-activiteiten/?c=1&voornaam=<?php echo esc_html( $current_user->user_firstname ) ?>&achternaam=<?php echo esc_html( $current_user->user_lastname ) ?>&email=<?php echo esc_html( $current_user->user_email ) ?>">Klik</a>
                <?php endif; ?>
            </div>
            <div class="w-full min-h-[250px] px-[25px]  schaduw py-[30px] order-1 md:order-2">
                <h2 class="text-24 leading-24 text-[#001A4C] mb-2">Mijn klanten activiteiten</h2>
                <p class="font-light text-[#001A4C]"><?php the_field('klanten_activiteiten', 'user_' . $current_user_id); ?></p>
            </div>
            <div class="w-full min-h-[250px] px-[25px]  schaduw py-[30px] order-1 md:order-2">
                <h2 class="text-24 leading-24 text-[#001A4C] mb-2">Mijn trainingen</h2>
                <p class="font-light text-[#001A4C]"><?php the_field('trainingen', 'user_' . $current_user_id); ?></p>
            </div>
        </div>
    </div>
</main>
<?php get_footer('nofooter'); ?>



