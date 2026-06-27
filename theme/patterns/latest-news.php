<?php
/**
 * Title: Najnowsze aktualności
 * Slug: school-page/latest-news
 * Categories: posts
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"section","align":"full","className":"school-section","backgroundColor":"sage","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull school-section has-sage-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"align":"wide","level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading alignwide has-x-large-font-size">Najnowsze aktualności</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"className":"school-post-grid","layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

			<!-- wp:post-date {"fontSize":"small"} /-->

			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

			<!-- wp:post-excerpt {"moreText":"Czytaj dalej"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p>Aktualności pojawią się w tym miejscu po opublikowaniu pierwszych wpisów.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"right"}} -->
	<div class="wp-block-buttons alignwide">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/aktualnosci/">Wszystkie aktualności</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
