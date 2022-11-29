<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ibrahimportfolio
 */

?>

	<footer class="footer py-3">
			<div class="container">
				<p class="small mb-0 text-light">
					&copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
				</p>
			</div>
		</footer>

		<!-- core  -->
		<?php wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', null, null, true); ?>
		<?php wp_enqueue_script( 'mainbs', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', null, null, true); ?>
		<!-- <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
		<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script> -->

		<!-- bootstrap 3 affix -->
		<?php wp_enqueue_script( 'bsaffix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', null, null, true); ?>
		<!-- <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script> -->

		<!-- Isotope  -->
		<?php wp_enqueue_script( 'bsisotope', get_template_directory_uri() . '/assets/vendors/isotope/isotope.pkgd.js', null, null, true); ?>
		<!-- <script src="assets/vendors/isotope/isotope.pkgd.js"></script> -->
		
		<!-- Google mpas -->
		<?php
            wp_register_script( 'mapscript', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap' );
            wp_enqueue_script('mapscript');
		?>
		<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script> -->

		<!-- JohnDoe js -->
		<?php wp_enqueue_script( 'jdjs', get_template_directory_uri() . '/assets/js/johndoe.js', null, null, true); ?>
		<!-- <script src="assets/js/johndoe.js"></script> -->

	</body>
	</html>

<?php wp_footer(); ?>

</body>
</html>
