<section class="section bg-dark text-center">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-6 col-lg-3">
						<div class="row ">
						<?php
							$config = get_option('_prefix_my_options');
							$string_converter_working_details = $config['opt-working-details-fields'];
							$string_converter_project_details = $config['opt-project-details-fields'];
							$string_converter_client_details = $config['opt-client-details-fields'];
							$string_converter_sclient_details = $config['opt-sclient-details-fields'];
						?>
							<div class="col-5 text-right text-light border-right py-3">
								<div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
							</div>
							<div class="col-7 text-left py-3">
								<h1 class="text-danger font-weight-bold font40"><?php echo $string_converter_working_details['opt-working-count']; ?></h1>
								<p class="text-light mb-1"><?php echo $string_converter_working_details['opt-working-details']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="row">
							<div class="col-5 text-right text-light border-right py-3">
								<div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
							</div>
							<div class="col-7 text-left py-3">
								<h1 class="text-danger font-weight-bold font40"><?php echo $string_converter_project_details['opt-project-count']; ?></h1>
								<p class="text-light mb-1"><?php echo $string_converter_project_details['opt-project-details']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="row">
							<div class="col-5 text-right text-light border-right py-3">
								<div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
							</div>
							<div class="col-7 text-left py-3">
								<h1 class="text-danger font-weight-bold font40"><?php echo $string_converter_client_details['opt-client-count']; ?></h1>
								<p class="text-light mb-1"><?php echo $string_converter_client_details['opt-client-details']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="row">
							<div class="col-5 text-right text-light border-right py-3">
								<div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
							</div>
							<div class="col-7 text-left py-3">
								<h1 class="text-danger font-weight-bold font40"><?php echo $string_converter_sclient_details['opt-sclient-count']; ?></h1>
								<p class="text-light mb-1"><?php echo $string_converter_sclient_details['opt-sclient-details']; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>