<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <title>Responsive Testimonial Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="carousel1.css">
</head>
<body>
    
			<section id="testimonial_area" class="section_padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testmonial_slider_area text-center owl-carousel">
									<?php for ($i=1; $i < 8 ; $i++) {  ?>
								<div class="box-area">	
									<div class="img-area">
									<!-- 	<img src="img/tesla (<?php echo $i; ?>).jpg" alt="<?php echo $i; ?>"/> -->
									<img src="img1/<?php echo $i; ?>.jpg" alt="">
									</div>	
									<h5>Person's name</h5>
									<span>Designation Goes Here</span>									
									<p class="content">
										Lorem Ipsum is simply dummy text of the printing and 
										typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
										ever since
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> 
								<?php	} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
		<script>
        $(".testmonial_slider_area").owlCarousel({
				autoplay: true,
				slideSpeed:1000,
				items : 3,
				loop: true,
				nav:true,
				navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
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
