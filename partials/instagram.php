   
<?php
/**
 * 
 * Partial Name: instagram
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<section class="instagram-partial-8cf9f5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="instagram-title"><?= get_field('instagram_title'); ?></h2>
                <div class="instagram-feed">
                    <div class="redman-restaurant">
                        <?= do_shortcode(get_field('redman_shortcode')); ?>
                    </div>
                    <div class="redman-la-tienda">
                        <?= do_shortcode(get_field('la_tienda_shortcode')); ?>
                    </div>
                </div>
                <ul class="follow-us">
                    <li>
                        <a href="<?= get_field('la_tienda_instagram')['url']; ?>" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            <span class="text"><?= get_field('la_tienda_instagram')['title']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_field('redman_instagram')['url']; ?>" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            <span class="text"><?= get_field('redman_instagram')['title']; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
                    