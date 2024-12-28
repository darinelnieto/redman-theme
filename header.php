<?php
/**
 * 
 * Header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <script>
    const _dittoURI_ = "<?= get_template_directory_uri() ?>",
          _dittoURL_ = "<?= get_site_url() ?>";
  </script>
</head>

<body <?php body_class(); ?>>
<div id="page"> <!-- +Page container -->

  <header id="header-wrapper">
    <div class="row justify-content-between align-items-center">
      <div class="col-5 col-md-4">
        <?= get_custom_logo(); ?>
      </div>
      <div class="col-7 col-md-4">
        <?php
          $social_networks = get_field('main_social_networks', 'option');
          if($social_networks):
        ?>
          <ul class="nav-social-network">
            <?php foreach($social_networks as $li): ?>
              <li>
                <a href="<?= $li['url']; ?>" target="_blank">
                  <?= $li['icon']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </header>