<?php
/**
 * Template name: Marketing activiteiten
 */


 get_header(); ?>
<?php
$current_user_id = get_current_user_id();
?>
<main>
    <div class="px-2 max-w-[680px] mx-auto">
       <?php echo do_shortcode( '[gravityform id="2" title="false"]' ); ?>
    </div>
</main>
<?php get_footer('nofooter'); ?>



