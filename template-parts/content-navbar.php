<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
			<div class="container">
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<?php
							wp_nav_menu(array(
								'theme_location' 	=> 'primary',
								'menu_class' 		=> 'navbar-nav mr-auto',
								'add_li_class'  	=> 'nav-item',
								'add_a_class'     	=> 'nav-link'
								// 'items_wrap'        => '<a class="nav-item">%3$s</a><',
								// 'link_before' 		=> '<span class="nav-link">',
								// 'link_after' 		=> '</span>',
							));
						?>
					</ul>
					<!-- <ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#home" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="#about" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="#resume" class="nav-link">Resume</a>
						</li>
					</ul> -->
					<ul class="navbar-nav brand">
					<?php
						$config = get_option('_prefix_my_options');
						$string_converter_hero = $config['opt-hero'];
					?>
						<img src="<?php echo $string_converter_hero['opt-heroimage2']['url']; ?>" alt="" class="brand-img">
						<li class="brand-txt">
							<h5 class="brand-title"><?php echo $string_converter_hero['opt-heroname']; ?></h5>
							<div class="brand-subtitle"><?php echo $string_converter_hero['opt-herodesignation']; ?></div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<?php
							wp_nav_menu(array(
								'theme_location' 	=> 'secondary',
								'menu_class' 		=> 'navbar-nav ml-auto',
								'add_li_class'  	=> 'nav-item',
								'add_a_class'     	=> 'nav-link'
							));
						?>
					</ul>
					<!-- <ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#portfolio" class="nav-link">Portfolio</a>
						</li>
						<li class="nav-item">
							<a href="#blog" class="nav-link">Blog</a>
						</li>
						<li class="nav-item last-item">
							<a href="#contact" class="nav-link">Contact</a>
						</li>
					</ul> -->
				</div>
			</div>
	</nav>