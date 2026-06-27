<?php
/**
 * Create the initial local information architecture.
 *
 * Run from the Studio site root:
 * studio wp eval-file /absolute/path/to/scripts/seed-site.php
 *
 * @package School_Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Create a page when it does not exist.
 *
 * Existing pages are not overwritten, so the script is safe to run again
 * after editors have started working on the content.
 *
 * @param string $title   Page title.
 * @param string $slug    Page slug.
 * @param string $content Initial page content.
 * @param int    $parent  Optional parent page ID.
 * @return int Page ID.
 */
function school_page_seed_page( $title, $slug, $content, $parent = 0 ) {
	$existing_pages = get_posts(
		array(
			'name'             => $slug,
			'numberposts'      => 1,
			'order'            => 'ASC',
			'orderby'          => 'ID',
			'post_status'      => 'any',
			'post_type'        => 'page',
			'suppress_filters' => false,
		)
	);

	if ( ! empty( $existing_pages ) && $existing_pages[0] instanceof WP_Post ) {
		return (int) $existing_pages[0]->ID;
	}

	$page_id = wp_insert_post(
		array(
			'post_content' => $content,
			'post_name'    => $slug,
			'post_parent'  => $parent,
			'post_status'  => 'publish',
			'post_title'   => $title,
			'post_type'    => 'page',
		),
		true
	);

	if ( is_wp_error( $page_id ) ) {
		throw new RuntimeException( $page_id->get_error_message() );
	}

	return (int) $page_id;
}

update_option( 'blogname', 'Przedszkole Publiczne św. Józefa' );
update_option( 'blogdescription', 'Ciepło, rozwój i wartości' );
update_option( 'timezone_string', 'Europe/Warsaw' );
update_option( 'date_format', 'j F Y' );
update_option( 'time_format', 'H:i' );

$default_post = get_page_by_path( 'hello-world', OBJECT, 'post' );

if ( $default_post instanceof WP_Post ) {
	wp_delete_post( $default_post->ID, true );
}

$default_page = get_page_by_path( 'sample-page', OBJECT, 'page' );

if ( $default_page instanceof WP_Post ) {
	wp_delete_post( $default_page->ID, true );
}

$home_id = school_page_seed_page(
	'Start',
	'start',
	'<!-- wp:paragraph --><p>Strona główna korzysta z szablonu motywu.</p><!-- /wp:paragraph -->'
);

school_page_seed_page(
	'O przedszkolu',
	'o-przedszkolu',
	'<!-- wp:paragraph --><p>Informacje o placówce, jej misji, historii i wartościach.</p><!-- /wp:paragraph -->'
);

$parents_id = school_page_seed_page(
	'Dla rodziców',
	'dla-rodzicow',
	'<!-- wp:paragraph --><p>Najważniejsze informacje organizacyjne dla rodziców.</p><!-- /wp:paragraph -->'
);

school_page_seed_page(
	'Kalendarium',
	'kalendarium',
	'<!-- wp:paragraph --><p>Najbliższe wydarzenia przedszkolne.</p><!-- /wp:paragraph -->',
	$parents_id
);

school_page_seed_page(
	'Opłaty',
	'oplaty',
	'<!-- wp:paragraph --><p>Informacje o opłatach i terminach płatności.</p><!-- /wp:paragraph -->',
	$parents_id
);

school_page_seed_page(
	'Jadłospis',
	'jadlospis',
	'<!-- wp:paragraph --><p>Aktualny jadłospis zostanie opublikowany w tym miejscu.</p><!-- /wp:paragraph -->',
	$parents_id
);

school_page_seed_page(
	'Dokumenty',
	'dokumenty',
	'<!-- wp:paragraph --><p>Dokumenty i formularze do pobrania.</p><!-- /wp:paragraph -->',
	$parents_id
);

school_page_seed_page(
	'Oferta',
	'oferta',
	'<!-- wp:paragraph --><p>Organizacja dnia, zajęcia oraz pomoc specjalistyczna.</p><!-- /wp:paragraph -->'
);

school_page_seed_page(
	'Rekrutacja',
	'rekrutacja',
	'<!-- wp:paragraph --><p>Terminy, zasady i dokumenty rekrutacyjne.</p><!-- /wp:paragraph -->'
);

$news_id = school_page_seed_page(
	'Aktualności',
	'aktualnosci',
	'<!-- wp:paragraph --><p>Archiwum aktualności przedszkola.</p><!-- /wp:paragraph -->'
);

school_page_seed_page(
	'Kontakt',
	'kontakt',
	'<!-- wp:paragraph --><p>Telefon, adres e-mail, godziny pracy i informacje o dojeździe.</p><!-- /wp:paragraph -->'
);

school_page_seed_page(
	'Deklaracja dostępności',
	'deklaracja-dostepnosci',
	'<!-- wp:paragraph --><p>Treść deklaracji zostanie przygotowana po audycie dostępności.</p><!-- /wp:paragraph -->'
);

school_page_seed_page(
	'Polityka prywatności',
	'polityka-prywatnosci',
	'<!-- wp:paragraph --><p>Treść polityki wymaga zatwierdzenia przez administratora danych.</p><!-- /wp:paragraph -->'
);

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $home_id );
update_option( 'page_for_posts', $news_id );

flush_rewrite_rules( false );

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::success( 'Utworzono początkową strukturę polskiej witryny.' );
}
