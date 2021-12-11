<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Ipak_Madlab
 * @since 1.0.0
 */

get_header();
?>

	<header class="page-header alignwide">
		<h1 class="page-title">خطای یافت نشد</h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p>صفحه موردنظر شما یافت نشد</p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_footer();
