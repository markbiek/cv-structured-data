<?php
/**
 * Plugin Name:  CV Structured Data
 * Plugin URI:   https://github.com/markbiek/cv-structured-data
 * Description:  Emits schema.org JSON-LD on the CV page and serves /cv.md and /llms.txt from the site root.
 * Version:      1.0.0
 * Author:       Mark Biek
 * Author URI:   https://mark.biek.org
 * License:      GPL-2.0-or-later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Requires PHP: 8.0
 *
 * @package Biek\CV
 */

namespace Biek\CV;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Slug of the page that gets the structured data.
 */
const PAGE_SLUG = 'cv';

/**
 * Root-relative paths this plugin serves, mapped to their media type and
 * the file under files/ that backs them.
 *
 * These only resolve when nginx finds no real file at the path and falls
 * through to index.php, which is the case on WordPress.com Atomic.
 */
const SERVED_FILES = array(
	'/cv.md'    => array( 'text/markdown', 'cv.md' ),
	'/llms.txt' => array( 'text/plain', 'llms.txt' ),
);

add_action( 'wp_head', __NAMESPACE__ . '\render_head' );
add_action( 'parse_request', __NAMESPACE__ . '\serve_root_files' );
add_filter( 'robots_txt', __NAMESPACE__ . '\add_llms_reference' );

/**
 * Print the alternate link and the JSON-LD block, on the CV page only.
 */
function render_head(): void {
	if ( ! is_page( PAGE_SLUG ) ) {
		return;
	}

	printf(
		'<link rel="alternate" type="text/markdown" href="%s">' . "\n",
		esc_url( home_url( '/cv.md' ) )
	);

	// JSON_HEX_TAG escapes < and >, so a stray </script> inside any string
	// cannot break out of the block. JSON_UNESCAPED_SLASHES keeps URLs
	// readable rather than https:\/\/.
	printf(
		'<script type="application/ld+json">%s</script>' . "\n",
		wp_json_encode(
			person_schema(),
			JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_PRETTY_PRINT
		)
	);
}

/**
 * Serve the markdown CV and llms.txt with a correct Content-Type.
 *
 * WordPress.com Atomic has no entry for .md in its nginx mime map, so a static
 * upload comes back as application/octet-stream and browsers download it
 * instead of displaying it. Serving through PHP is how we set the header.
 */
function serve_root_files(): void {
	$request_uri = isset( $_SERVER['REQUEST_URI'] )
		? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) )
		: '';

	$path = strtok( $request_uri, '?' );

	// Compared against a fixed allowlist of exact strings, so the request path
	// cannot be used to reach an arbitrary file.
	if ( ! isset( SERVED_FILES[ $path ] ) ) {
		return;
	}

	list( $media_type, $filename ) = SERVED_FILES[ $path ];

	$file = __DIR__ . '/files/' . $filename;

	if ( ! is_readable( $file ) ) {
		return;
	}

	header( 'Content-Type: ' . $media_type . '; charset=utf-8' );
	header( 'X-Content-Type-Options: nosniff' );

	readfile( $file );
	exit;
}

/**
 * Point robots.txt at llms.txt.
 *
 * WordPress generates robots.txt on Atomic, so this has to go through the
 * filter rather than a static file, which would never be reached.
 *
 * @param string $output Generated robots.txt content.
 * @return string
 */
function add_llms_reference( string $output ): string {
	return $output . "\n# Structured summary for language models\n"
		. '# ' . esc_url_raw( home_url( '/llms.txt' ) ) . "\n";
}

/**
 * The schema.org Person record.
 *
 * Deliberately omits `telephone`. The number is on the human-readable CV page,
 * but putting it in structured data makes it harvestable at scale, which is a
 * meaningfully different exposure. Uncomment the line below if you want it.
 *
 * @return array<string, mixed>
 */
function person_schema(): array {
	return array(
		'@context'      => 'https://schema.org',
		'@type'         => 'Person',
		'name'          => 'Mark Biek',
		'email'         => 'mailto:markbiek@duck.com',
		// 'telephone'  => '+1-XXX-XXX-XXXX', // See "On the phone number" in README.md.
		'url'           => home_url( '/' ),
		'jobTitle'      => 'Senior Software Engineer',
		'address'       => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => 'Louisville',
			'addressRegion'   => 'KY',
			'addressCountry'  => 'US',
		),
		'knowsAbout'    => array(
			'PHP',
			'WordPress',
			'Laravel',
			'TypeScript',
			'JavaScript',
			'React',
			'Node.js',
			'SQL',
			'REST API design',
			'Domain registration systems',
			'ICANN registrar operations',
			'EPP',
			'DNS',
			'Ecommerce and checkout systems',
			'Model Context Protocol',
			'AI agent tooling',
			'AWS',
			'Docker',
		),
		'hasOccupation' => array(
			array(
				'@type'                => 'OccupationalExperience',
				'name'                 => 'Senior Software Engineer',
				'startDate'            => '2022-02',
				'occupationalCategory' => '15-1252.00',
				'worksFor'             => array(
					'@type' => 'Organization',
					'name'  => 'Automattic',
					'url'   => 'https://automattic.com',
				),
				'description'          => 'Domains, checkout and commerce infrastructure for WordPress.com. Built the contact verification service that keeps every WordPress.com domain ICANN-compliant across all registrars. Took domain bundling from prototype to launch. Built the domain capabilities behind WordPress.com\'s AI support agent. Led the white-labeled site migration plugin.',
			),
			array(
				'@type'       => 'OccupationalExperience',
				'name'        => 'Development Team Lead',
				'startDate'   => '2015-12',
				'endDate'     => '2022-02',
				'worksFor'    => array(
					'@type' => 'Organization',
					'name'  => 'VIA Studio',
				),
				'description' => 'Custom website and large-scale ecommerce development in Laravel, WordPress, React and Next.js. Led a development team and the WordPress plugin sales platform.',
			),
			array(
				'@type'       => 'OccupationalExperience',
				'name'        => 'Senior Development Consultant',
				'startDate'   => '2002',
				'endDate'     => '2022',
				'worksFor'    => array(
					'@type' => 'Organization',
					'name'  => 'Studymaker, LLC',
				),
				'description' => 'CDC Recover platform and an EDC platform for medical research data tracking, in Laravel and React. AWS architecture and HIPAA compliance.',
			),
			array(
				'@type'       => 'OccupationalExperience',
				'name'        => 'Senior Programmer Analyst',
				'startDate'   => '2013-09',
				'endDate'     => '2015-11',
				'worksFor'    => array(
					'@type' => 'Organization',
					'name'  => 'Kindred Healthcare',
				),
				'description' => 'C#, .NET and ASP.NET development.',
			),
			array(
				'@type'       => 'OccupationalExperience',
				'name'        => 'Senior Interactive Developer',
				'startDate'   => '2008-08',
				'endDate'     => '2013-09',
				'worksFor'    => array(
					'@type' => 'Organization',
					'name'  => 'Power Creative',
				),
				'description' => 'PHP, JavaScript, ASP.NET and C# development.',
			),
			array(
				'@type'       => 'OccupationalExperience',
				'name'        => 'Senior Programmer Analyst',
				'startDate'   => '2002-09',
				'endDate'     => '2008-08',
				'worksFor'    => array(
					'@type' => 'Organization',
					'name'  => 'The Stevenson Company',
				),
				'description' => 'PHP, JavaScript, SAS and Python development.',
			),
		),
	);
}
