   
<?php
/**
 * 
 * Partial Name: section-two
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$section = get_field('two_section');
$after_banne = $section['after_banner'];
$location = $section['location'];
?>
<section class="section-two-partial-10c867">
    <img src="<?= $section['background_image']['url']; ?>" alt="<?= $section['background_image']['title']; ?>" class="background">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-7 col-lg-6 mb-5 mb-md-0">
                <img src="<?= $after_banne['image']['url']; ?>" alt="<?= $after_banne['image']['url']; ?>" class="phone">
            </div>
            <div class="col-12 col-md-5 col-lg-6 text-center">
                <h2><?= $after_banne['title']; ?></h2>
                <p><?= $after_banne['description']; ?></p>
                <a href="<?= $after_banne['reservation_cta']['url']; ?>" target="<?= $after_banne['reservation_cta']['target']; ?>" class="cta">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.884" height="26.884" viewBox="0 0 26.884 26.884">
                        <path id="Trazado_172" data-name="Trazado 172" d="M8.658,1.27A2.094,2.094,0,0,0,6.169.052l-4.62,1.26A2.106,2.106,0,0,0,0,3.339,23.524,23.524,0,0,0,23.522,26.861a2.106,2.106,0,0,0,2.027-1.549l1.26-4.62A2.094,2.094,0,0,0,25.591,18.2l-5.04-2.1a2.094,2.094,0,0,0-2.431.609L16,19.3a17.745,17.745,0,0,1-8.438-8.438l2.588-2.116a2.1,2.1,0,0,0,.609-2.431l-2.1-5.04Z" transform="translate(0 0.023)" fill="#f6f2e1"/>
                    </svg>
                    <div class="text"><?= $after_banne['reservation_cta']['title']; ?></div>
                </a>
            </div>
        </div>
        <div class="row align-items-end location">
            <div class="col-12 col-md-5 col-lg-6 text-center">
                <h2><?= $location['title']; ?></h2>
                <p><?= $location['description']; ?></p>
                <ul class="go-whit">
                    <li>
                        <a href="<?= $location['waze']['url']; ?>" target="<?= $location['waze']['target']; ?>">
                            <i class="fa-brands fa-waze"></i>
                            <span class="text"><?= $location['waze']['title']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $location['goole_map']['url']; ?>" target="<?= $location['goole_map']['target']; ?>">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="text"><?= $location['goole_map']['title']; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-7 col-lg-6 text-center mb-4 mb-md-0">
                <?= $location['map_iframe'] ?>
            </div>
        </div>
    </div>
</section>
                    