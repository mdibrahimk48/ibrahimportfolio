<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ibrahimportfolio
 */

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

		<!--Services Section-->
		<?php
			get_template_part('template-parts/content', 'services');
		?>
		<!--Services Section End-->

		<!--Pricing Section-->
		<?php
			get_template_part('template-parts/content', 'services');
		?>
		<!--Pricing Section End-->


		<!-- Portfolio Section -->
		<section class="section bg-custom-gray" id="portfolio">
			<div class="container">
				<h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
				<div class="portfolio">
					<div class="filters">
						<a href="#" data-filter=".new" class="active">
							New
						</a>
						<a href="#" data-filter=".advertising">
							Advertising
						</a>
						<a href="#" data-filter=".branding">
							Branding
						</a>
						<a href="#" data-filter=".web">
							Web
						</a>
					</div>
					<div class="portfolio-container"> 
						<div class="col-md-6 col-lg-4 web new">
							<div class="portfolio-item">
								<img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/web-1.jpg"></a>
									<div class="text-holder">
										<h6 class="title">WEB</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>   
							</div>             
						</div>
						<div class="col-md-6 col-lg-4 web new">
							<div class="portfolio-item">
								<img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/web-2.jpg"></a>
									<div class="text-holder">
										<h6 class="title">WEB</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div> 
							</div>                         
						</div>
						<div class="col-md-6 col-lg-4 advertising new">
							<div class="portfolio-item">
								<img src="assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
									<div class="text-holder">
										<h6 class="title">ADVERSTISING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>    
							</div>              
						</div> 
						<div class="col-md-6 col-lg-4 web">
							<div class="portfolio-item">
								<img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/web-4.jpg"></a>
									<div class="text-holder">
										<h6 class="title">WEB</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                     
						</div>

						<div class="col-md-6 col-lg-4 advertising"> 
							<div class="portfolio-item">
								<img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
									<div class="text-holder">
										<h6 class="title">ADVERSITING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                       
						</div> 
						<div class="col-md-6 col-lg-4 web new">
							<div class="portfolio-item">
								<img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
							<div class="content-holder">
									<a class="img-popup" href="assets/imgs/web-3.jpg"></a>
									<div class="text-holder">
										<h6 class="title">WEB</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                     
						</div>
						<div class="col-md-6 col-lg-4 advertising new">
							<div class="portfolio-item">
								<img src="assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
							<div class="content-holder">
									<a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
									<div class="text-holder">
										<h6 class="title">ADVERSITING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                       
						</div> 
						<div class="col-md-6 col-lg-4 advertising new"> 
							<div class="portfolio-item">
								<img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
									<div class="text-holder">
										<h6 class="title">ADVERTISING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>
									
						</div> 
						<div class="col-md-6 col-lg-4 branding new">
							<div class="portfolio-item">
								<img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
									<div class="text-holder">
										<h6 class="title">BRANDING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div> 
							</div>
						</div> 
						<div class="col-md-6 col-lg-4 branding">
							<div class="portfolio-item">
								<img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
									<div class="text-holder">
										<h6 class="title">BRANDING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                     
						</div> 
						<div class="col-md-6 col-lg-4 branding new">
							<div class="portfolio-item">
								<img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
									<div class="text-holder">
										<h6 class="title">BRANDING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                    
						</div> 
						<div class="col-md-6 col-lg-4 branding">
							<div class="portfolio-item">
								<img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
									<div class="text-holder">
										<h6 class="title">BRANDING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                      
						</div> 
						<div class="col-md-6 col-lg-4 branding">
							<div class="portfolio-item">
								<img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
								<div class="content-holder">
									<a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
									<div class="text-holder">
										<h6 class="title">BRANDING</h6>
										<p class="subtitle">Expedita corporis doloremque velit in totam!</p>
									</div>
								</div>
							</div>                                                   
						</div>
					</div> 
				</div>  
			</div>            
		</section>
		<!-- End of portfolio section -->

		<section class="section" id="blog">
			<div class="container">
				<h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
				<div class="row">
					<div class="blog-card">
						<div class="img-holder">
							<img src="assets/imgs/blog1.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
						</div>
						<div class="content-holder">
							<h6 class="title">Consectetur adipisicing elit</h6>

							<p class="post-details">
								<a href="#">By: Admin</a>
								<a href="#"><i class="ti-heart text-danger"></i> 234</a>
								<a href="#"><i class="ti-comment"></i> 123</a>
							</p>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium neque numquam mollitia modi quasi distinctio.</p>

							<p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b></p>
							<p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>

							<a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
						</div>
					</div><!-- end of blog wrapper -->

					<!-- blog-card -->
					<div class="blog-card">
						<div class="img-holder">
							<img src="assets/imgs/blog2.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
						</div>
						<div class="content-holder">
							<h6 class="title">Explicabo illo</h6>

							<p class="post-details">
								<a href="#">By: Admin</a>
								<a href="#"><i class="ti-heart text-danger"></i> 456</a>
								<a href="#"><i class="ti-comment"></i> 264</a>
							</p>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

							<a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
						</div>
					</div><!-- end of blog wrapper -->
					<!-- blog-card -->
					<div class="blog-card">
						<div class="img-holder">
							<img src="assets/imgs/blog3.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
						</div>
						<div class="content-holder">
							<h4 class="title">Porro Quisqua</h4>

							<p class="post-details">
								<a href="#">By: Admin</a>
								<a href="#"><i class="ti-heart text-danger"></i> 431</a>
								<a href="#"><i class="ti-comment"></i> 312</a>
							</p>
							
							<p> consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

							<a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
						</div>
					</div><!-- end of blog wrapper -->

				</div>
			</div>
		</section>

		<div class="section contact" id="contact">
			<div id="map" class="map"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-form-card">
							<h4 class="contact-title">Send a message</h4>
							<form action="">
								<div class="form-group">
									<input  class="form-control" type="text" placeholder="Name *" required>
								</div>
								<div class="form-group">
									<input class="form-control" type="email" placeholder="Email *" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" id=" placeholder="Message *" rows="7" required></textarea>
								</div>
								<div class="form-group ">
									<button type="submit" class="form-control btn btn-primary" >Send Message</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-info-card">
							<h4 class="contact-title">Get in touch</h4>
							<div class="row mb-2">
								<div class="col-1 pt-1 mr-1">
									<i class="ti-mobile icon-md"></i>
								</div>
								<div class="col-10 ">
									<h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-1 pt-1 mr-1">
									<i class="ti-map-alt icon-md"></i>
								</div>
								<div class="col-10">
									<h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB Country.</span></h6>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-1 pt-1 mr-1">
									<i class="ti-envelope icon-md"></i>
								</div>
								<div class="col-10">
									<h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
								</div>
							</div>
							<ul class="social-icons pt-4">
								<li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
								<li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
								<li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
								<li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
								<li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
							</ul> 
						</div>
					</div>
				</div>

			</div>
		</div>
		<footer class="footer py-3">
			<div class="container">
				<p class="small mb-0 text-light">
					&copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
				</p>
			</div>
		</footer>

		<!-- core  -->
		<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
		<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

		<!-- bootstrap 3 affix -->
		<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

		<!-- Isotope  -->
		<script src="assets/vendors/isotope/isotope.pkgd.js"></script>
		
		<!-- Google mpas -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

		<!-- JohnDoe js -->
		<script src="assets/js/johndoe.js"></script>

	</body>
	</html>


<?php
	get_sidebar();
	get_footer();
?>