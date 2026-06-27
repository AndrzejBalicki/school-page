<?php
/**
 * Title: Premium latest news
 * Slug: school-page/latest-news
 * Categories: posts
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"section","align":"full","className":"premium-news school-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull premium-news school-section">
	<!-- wp:group {"align":"wide","className":"premium-section-heading premium-section-heading--news","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide premium-section-heading premium-section-heading--news">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"premium-kicker"} --><p class="premium-kicker">Z życia przedszkola</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Codziennie wydarza się coś dobrego.</h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"className":"premium-news__all"} -->
		<p class="premium-news__all"><a href="/aktualnosci/">Wszystkie aktualności <span aria-hidden="true">→</span></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"premium-news__query","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide premium-news__query">
		<!-- wp:post-template {"className":"school-post-grid premium-news__grid","layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"premium-news-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group premium-news-card">
				<!-- wp:group {"className":"premium-news-card__meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group premium-news-card__meta">
					<!-- wp:post-date {"fontSize":"small"} /-->
					<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">Aktualności</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

				<!-- wp:post-excerpt {"moreText":"Czytaj więcej →","showMoreOnNewLine":true} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph --><p>Aktualności pojawią się tutaj już wkrótce.</p><!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->
