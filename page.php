<?php
/**
 * 
 * Default page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="ditto-page">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1><?= the_title(); ?></h1>
					<div class="content-description">
						<?= the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>