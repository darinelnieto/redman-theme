<?php
/**
 * 
 * Footer template.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$background = get_field('background_image', 'option');
$suscription = get_field('suscription', 'option');
$social_networks = get_field('social_networks', 'option');
?>
<footer id="footer-wrapper">
    <img src="<?= $background['url']; ?>" alt="<?= $background['title']; ?>" class="background">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-4">
                <div class="form">
                    <?= do_shortcode($suscription['form_shortcode']); ?>
                </div>
                <img src="<?= $suscription['logo_beige']['url']; ?>" alt="<?= $suscription['logo_beige']['title']; ?>" class="logo-beige">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="nav-contain">
                    <?php wp_nav_menu(['menu' => 'Menu 1']); ?>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <?php if($social_networks['list']): ?>
                    <h4 class="title-social-networks"><?= $social_networks['title']; ?></h4>
                    <ul class="social-networks">
                        <?php foreach($social_networks['list'] as $item): ?>
                            <li>
                                <a href="<?= $item['link']; ?>" target="_blank">
                                    <span class="icon">
                                        <?= $item['icon']; ?>
                                    </span>
                                    <span class="hashtag">
                                        <?= $item['hashtag']; ?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>