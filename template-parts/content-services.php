<section class="section" id="service">
			<div class="container">
			<?php
				$config = get_option('_prefix_my_options');
				$string_converter_services_heading = $config['opt-services-heading'];
			?>
				<h2 class="mb-5 pb-4"><span class="text-danger"><?php echo $string_converter_services_heading['opt-services-heading1']; ?></span> <?php echo $string_converter_services_heading['opt-services-heading2']; ?></h2>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="card mb-5">
						<div class="card-header has-icon">
						<!-- Services Details Loop -->
							<?php
								if($string_converter_languages['opt-languages-group']){
									foreach($string_converter_languages['opt-languages-group'] as $single_array_convert_lan){
										// var_dump($single_array_convert_lan);
										?>
											<h6><?php echo $single_array_convert_lan['opt-languages-title']; ?></h6>
											<div class="progress mb-3">
												<div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $single_array_convert_lan['opt-languages-measurement']; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										<?php
									}
								}
							?>
								<i class="ti-vector text-danger" aria-hidden="true"></i>
							</div>
							<div class="card-body px-4 py-3">
								<h5 class="mb-3 card-title text-dark">Ullam</h5>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card mb-5">
						<div class="card-header has-icon">
								<i class="ti-write text-danger" aria-hidden="true"></i>
							</div>
							<div class="card-body px-4 py-3">
								<h5 class="mb-3 card-title text-dark">Asperiores</h5>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card mb-5">
						<div class="card-header has-icon">
								<i class="ti-package text-danger" aria-hidden="true"></i>
							</div>
							<div class="card-body px-4 py-3">
								<h5 class="mb-3 card-title text-dark">Tempora</h5>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card mb-5">
						<div class="card-header has-icon">
								<i class="ti-map-alt text-danger" aria-hidden="true"></i>
							</div>
							<div class="card-body px-4 py-3">
								<h5 class="mb-3 card-title text-dark">Provident</h5>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card mb-5">
						<div class="card-header has-icon">
								<i class="ti-bar-chart text-danger" aria-hidden="true"></i>
							</div>
							<div class="card-body px-4 py-3">
								<h5 class="mb-3 card-title text-dark">Consectetur</h5>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="card mb-5">
						<div class="card-header has-icon">
								<i class="ti-support text-danger" aria-hidden="true"></i>
							</div>
							<div class="card-body px-4 py-3">
								<h5 class="mb-3 card-title text-dark">Veritatis</h5>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>