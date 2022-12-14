<section class="section" id="resume">
			<div class="container">
				<?php
					$config = get_option('_prefix_my_options');
					$string_converter_resume_heading = $config['opt-resume-heading'];
				?>
				<h2 class="mb-5"><span class="text-danger"><?php echo $string_converter_resume_heading['opt-detailstitle1']; ?></span> <?php echo $string_converter_resume_heading['opt-detailstitle2']; ?></h2>
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="card">
						<div class="card-header">
								<div class="mt-2">
								<?php
									$string_converter_main_section = $config['opt-heading-title-expertise'];
									// var_dump($string_converter_main_section);
								?>
									<h4><?php echo $string_converter_main_section['opt-expertisetitle']; ?></h4>
									<span class="line"></span>  
								</div>
							</div>
							<div class="card-body">
							<?php
								if($string_converter_main_section['opt-expertise-group']){
									foreach($string_converter_main_section['opt-expertise-group'] as $single_array_convert_exp){
										// var_dump($single_array_convert_exp);
										?>
											<h6 class="title text-danger"><?php echo $single_array_convert_exp['opt-exp-duration']; ?></h6>
											<P><?php echo $single_array_convert_exp['opt-exp-designation']; ?></P>
											<P class="subtitle"><?php echo $single_array_convert_exp['opt-exp-description-part']; ?></P>
											<hr>
										<?php
									}
								}
							?>
								<!-- <hr>
								<h6 class="title text-danger">2016 - 2017</h6>
								<P>Front-end Developer</P>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</P>
								<hr>
								<h6 class="title text-danger">2015 - 2016</h6>
								<P>UX Designer</P>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</P> -->
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="card">
						<div class="card-header">
								<div class="mt-2">
								<?php
									$string_converter_edu_main_section = $config['opt-heading-title-education'];
									// var_dump($string_converter_edu_main_section);
								?>
									<h4><?php echo $string_converter_edu_main_section['opt-educationtitle']; ?></h4>
									<span class="line"></span>  
								</div>
							</div>
							<div class="card-body">
							<?php
								if($string_converter_edu_main_section['opt-education-group']){
									foreach($string_converter_edu_main_section['opt-education-group'] as $single_array_convert_edu){
										// var_dump($single_array_convert_edu);
										?>
											<h6 class="title text-danger"><?php echo $single_array_convert_edu['opt-edu-duration']; ?></h6>
											<P><?php echo $single_array_convert_edu['opt-edu-degree']; ?></P>
											<P class="subtitle"><?php echo $single_array_convert_edu['opt-edu-description-part']; ?></P>
											<hr>
										<?php
									}
								}
							?>
								<!-- <h6 class="title text-danger">2017 - Present</h6>
								<P>B.E Computer Engineering</P>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.</P>
								<hr>
								<h6 class="title text-danger">2016 - 2017</h6>
								<P>Diploma in Computer Engineering</P>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, id officiis quas placeat quia voluptas dolorum rem animi nostrum quae.aliquid repudiandae saepe!.</P>
								<hr>
								<h6 class="title text-danger">2015 - 2016</h6>
								<P>High School Degree</P>
								<P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</P> -->
								
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
						<div class="card-header">
								<div class="pull-left">
								<?php
									$string_converter_skills = $config['opt-skills'];
									// var_dump($string_converter_skills);
								?>
									<h4 class="mt-2"><?php echo $string_converter_skills['opt-skillstitle']; ?></h4>
									<span class="line"></span>  
								</div>
							</div>
							<div class="card-body pb-2">
							<!-- Skills Details Loop -->
							<?php
								if($string_converter_skills['opt-skills-group']){
									foreach($string_converter_skills['opt-skills-group'] as $single_array_convert_ski){
										// var_dump($single_array_convert_ski);
										?>
											<h6><?php echo $single_array_convert_ski['opt-skills-title']; ?></h6>
											<div class="progress mb-3">
												<div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $single_array_convert_ski['opt-skills-measurement']; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										<?php
									}
								}
							?>
							<!-- <h6>hTL5 &amp; CSS3</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>JavaScript</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>PHP</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>SQL</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>Laborum</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>Tempora</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div> -->
							</div>
						</div>
						<div class="card">
						<div class="card-header">
								<div class="pull-left">
									<?php
										$string_converter_languages = $config['opt-languages'];
										//var_dump($string_converter_languages);
									?>
									<h4 class="mt-2"><?php echo $string_converter_languages['opt-laguagestitle']; ?></h4>
									<span class="line"></span>  
								</div>
							</div>
							<div class="card-body pb-2">
							<!-- Languages Details Loop -->
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
							<!-- <h6>English</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>French</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h6>Spanish</h6>
								<div class="progress mb-3">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

<style>
	hr:last-child {
		border: none !important;
	}
</style>