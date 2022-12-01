<div class="container-fluid">
			<div id="about" class="row about-section">
				<div class="col-lg-4 about-card">
				<?php
					$config = get_option('_prefix_my_options');
					$string_converter_about = $config['opt-about-details'];
				?>

					<h3 class="font-weight-light"><?php echo $string_converter_about['opt-detailstitle']; ?></h3>
					<span class="line mb-5"></span>
					<h5 class="mb-3"><?php echo $string_converter_about['opt-detailsheading']; ?></h5>
					<p class="mt-20"><?php echo $string_converter_about['opt-detailsdesc']; ?></p>
					<button class="btn btn-outline-danger"><i class="icon-down-circled2 "></i><?php echo $string_converter_about['opt-detailsbuttontitle']; ?></button>
				</div>
				<div class="col-lg-4 about-card">
					<h3 class="font-weight-light">Personal Info</h3>
					<span class="line mb-5"></span>
					<ul class="mt40 info list-unstyled">
						<li><span>Birthdate</span> : 09/13/1996</li>
						<li><span>Email</span> : info@website.com</li>
						<li><span>Phone</span> : + (123) 456-7890</li>
						<li><span>Skype</span> : John_Doe </li>
						<li><span>Address</span> :  12345 Fake ST NoWhere AB Country.</li>
					</ul>
					<!-- Dynamic Social Fields -->
					<ul class="social-icons pt-3">
						<?php
							$string_converter_social = $config['opt-social'];
								// Loop For Icon
								if($string_converter_social){
									foreach($string_converter_social as $social_field){
										?>
											<li class="social-item"><a class="social-link" href="<?php echo $social_field['opt-social-url'];?>"><i class="<?php echo $social_field['opt-social-icon'];?>" aria-hidden="true"></i></a></li>
										<?php
									}
								}
						?>
					</ul>  
					<!-- <ul class="social-icons pt-3">
						<li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
						<li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
						<li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
						<li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
						<li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
					</ul>   -->
				</div>
				<div class="col-lg-4 about-card">
					<h3 class="font-weight-light">My Expertise</h3>
					<span class="line mb-5"></span>
					<div class="row">
						<div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
						<div class="col-10 ml-auto mr-3">
							<h6>UX Design</h6>
							<p class="subtitle"> exercitat Repellendus,  corrupt.</p>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
						<div class="col-10 ml-auto mr-3">
							<h6>Web Development</h6>
							<p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
						<div class="col-10 ml-auto mr-3">
							<h6>Digital Marketing</h6>
							<p class="subtitle">voluptate commodi illo voluptatib.</p>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>