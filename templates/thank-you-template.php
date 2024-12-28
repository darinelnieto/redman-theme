   
<?php
/**
 * 
 * Template Name: thank-you
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="thank-you-template-65055a">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1><?= the_title(); ?></h1>
                    <div class="description">
                        <?= the_content(); ?>
                    </div>
                    <a href="<?= home_url(); ?>" class="back"><i class="fa-solid fa-left-long"></i> <span class="text">Volver</span></a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
                    