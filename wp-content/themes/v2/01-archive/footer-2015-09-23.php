<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<head><?php wp_footer(); ?></head>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div align="right">
			<?php do_action( 'twentytwelve_credits' ); ?>
			by R.Haubt, Rock Art Database v.2.0 © January 2014, last update September 2015 - <a href="http://www.griffith.edu.au/humanities-languages/school-humanities/research/perahu" target="_blank">
                        supported by PERAHU, Griffith University</a>
			<a href="http://www.griffith.edu.au/humanities-languages/school-humanities/research/perahu" target="_blank"><img class="footer_logos" src="http://rockartdatabase.com/radb/wp-content/themes/rockartdatabase_main/wp-content/images/griffith-logo.png"></a>
			<a href="http://www.facebook.com" target="_blank"><img class="footer_logos" src="http://rockartdatabase.com/radb/wp-content/themes/rockartdatabase_main/wp-content/images/facebook-logo.png"></a>
			<a href="https://twitter.com/RockArtDatabase" target="_blank"><img class="footer_logos" src="http://rockartdatabase.com/radb/wp-content/themes/rockartdatabase_main/wp-content/images/twitter-logo.png"></a>
                        
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>