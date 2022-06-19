<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>How To Create Post Carousel Slider using HTML CSS JavaScript</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="carousel.css">
</head>
<body>
	<!-- START blog -->
	<section id="blog_area" class="section_padding">
		<div class="container">
			<div class="section_heading text-center">
				<h2>Our <span>blog</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <br/> ultrices sapien vel quam luctus pulvinar.</p>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="blog_slider_area owl-carousel">
						<?php for ($i=1; $i < 10 ; $i++) {  ?>
							<div class="box-area">	
								<div class="single-blog">
									<div class="post-img">
										<img src="img/tesla (<?php echo $i; ?>).jpg" alt="<?php echo $i; ?>"/>
									</div>
									<div class="single_blog">
										<a href="#"><h3 class="post-title">Web Design Agency <?php echo $i; ?></h3></a>
										<ul class="icon-area">
											<li><i class="fa fa-users"></i>Admin</li>
											<li><i class="fa fa-clock-o"></i><?php echo date('l jS \of F Y h:i:s A'); ?> </li>										
										</ul>
										<p class="blog-text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
										</p>
										<div class="btn-area">
											<a href="#" class="btn btn-default main_btn">read more</a>
										</div>
									</div>
								</div>
							</div> 
						

						<?php	} ?>
				

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END blog -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
	<script>
		$(".blog_slider_area").owlCarousel({
			autoplay: true,
			slideSpeed:1000,
			items : 4,
			loop: true,
			nav:false,
			margin: 30,
			dots: true,
		
			responsive:{
				320:{
					items:1
				},
				767:{
					items:2
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			}

		});
	</script>
</body>
</html>
