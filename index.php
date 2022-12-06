<?php

get_header();
?>

	<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
		<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>

		<!-- Hero Start -->
		<?php
			get_template_part('template-parts/content', 'hero');
		?>
		<!-- Hero End -->

		<!-- Navbar Start -->
		<?php
			get_template_part('template-parts/content', 'navbar');
		?>
		<!-- Navbar End -->

		<!-- About Start -->
		<?php
			get_template_part('template-parts/content', 'about');
		?>
		<!-- About End -->

		<!--Resume Section-->
		<?php
			get_template_part('template-parts/content', 'resume');
		?>
		<!--Resume Section End-->

		<!--Details Section-->
		<?php
			get_template_part('template-parts/content', 'details');
		?>
		<!--Details Section End-->

		<!--Pricing Section-->
		<?php
			get_template_part('template-parts/content', 'services');
		?>
		<!--Pricing Section End-->

		<!-- Portfolio Section -->
		<?php
			get_template_part('template-parts/content', 'portfolio');
		?>
		<!-- End of portfolio section -->

		<!-- Blog Section -->
		<?php
			get_template_part('template-parts/content', 'blog');
		?>
		<!-- End of Blog section -->

		<!-- Contact Section -->
		<?php
			get_template_part('template-parts/content', 'contact');
		?>
		<!-- End of Contact section -->

<?php
	get_footer();
?>