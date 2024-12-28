   
<?php
/**
 * 
 * Partial Name: banner
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner = get_field('banner');
if($banner['banner_items']):
?>
<section class="banner-partial-e3f173">
    <div class="banner-slide owl-carousel">
        <?php foreach($banner['banner_items'] as $item): ?>
            <div class="item">
                <img src="<?= $item['image']['url']; ?>" alt="<?= $item['image']['url']; ?>" class="image">
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <h1><?= $banner['title']; ?></h1>
                <h3 class="text-after-title"><?= $banner['text_after_title']; ?></h3>
                <p class="description"><?= $banner['description']; ?></p>
                <ul class="pdf-contain">
                    <li>
                        <a href="<?= $banner['redman_restaurante_url_pdf']['url']; ?>" class="cta-pdf" target="_blank" download="<?= $banner['redman_restaurante_url_pdf']['filename']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.287" height="25.716" viewBox="0 0 19.287 25.716">
                                <path id="Trazado_178" data-name="Trazado 178" d="M3.215,0A3.217,3.217,0,0,0,0,3.215V22.5a3.217,3.217,0,0,0,3.215,3.215H16.073A3.217,3.217,0,0,0,19.287,22.5V8.036H12.858a1.606,1.606,0,0,1-1.607-1.607V0Zm9.644,0V6.429h6.429ZM10.849,11.653v5.128l1.557-1.557a1.2,1.2,0,0,1,1.7,1.7l-3.616,3.616a1.2,1.2,0,0,1-1.7,0L5.173,16.926a1.2,1.2,0,0,1,1.7-1.7l1.557,1.557.005-5.128a1.205,1.205,0,0,1,2.411,0Z" fill="#724e26"/>
                            </svg>
                            <span class="text"><?= $banner['redman_restaurante_url_pdf']['title']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $banner['redman_la_tienda_url_pdf']['url']; ?>" class="cta-pdf" target="_blank" download="<?= $banner['redman_la_tienda_url_pdf']['filename']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.287" height="25.716" viewBox="0 0 19.287 25.716">
                                <path id="Trazado_178" data-name="Trazado 178" d="M3.215,0A3.217,3.217,0,0,0,0,3.215V22.5a3.217,3.217,0,0,0,3.215,3.215H16.073A3.217,3.217,0,0,0,19.287,22.5V8.036H12.858a1.606,1.606,0,0,1-1.607-1.607V0Zm9.644,0V6.429h6.429ZM10.849,11.653v5.128l1.557-1.557a1.2,1.2,0,0,1,1.7,1.7l-3.616,3.616a1.2,1.2,0,0,1-1.7,0L5.173,16.926a1.2,1.2,0,0,1,1.7-1.7l1.557,1.557.005-5.128a1.205,1.205,0,0,1,2.411,0Z" fill="#724e26"/>
                            </svg>
                            <span class="text"><?= $banner['redman_la_tienda_url_pdf']['title']; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>