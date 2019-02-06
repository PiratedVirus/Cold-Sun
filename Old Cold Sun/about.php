<?php include 'templates/header.php' ?>
		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="img/img/about-us.jpg">
				</div>
				
				<div style="color: #FFF;" class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="text-white alt-font">Meet The Team</span>
							<h1 class="orangeText">About Us</h1>
							<p style="color: #000;" class="text-black lead">Learn why we're the best at what we do<br>and why we're regarded as one of the best<br>in the creative industry today.</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			
			
			<section class="duplicatable-content">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<!-- <h1>Showcase services in a<br>spacious &amp; clean manner</h1> -->
						</div>
					</div><!--end of row-->
		
					<div class="row">
						<div class="col-sm-12">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut veritatis eius tempora quia hic, quas alias corporis eveniet assumenda, molestiae repellendus fugiat architecto rerum? Necessitatibus doloremque exercitationem consequuntur earum cumque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ullam nostrum nisi laborum sed eveniet nihil expedita, distinctio quidem necessitatibus exercitationem perspiciatis facilis illo, amet eaque, iusto eligendi unde officiis quam architecto eum ex ut? Debitis, reiciendis. Optio, incidunt ipsa dolorum, excepturi omnis quam corporis assumenda sint eligendi dolores facere animi, nihil sequi tenetur nesciunt ullam dolorem recusandae! Sapiente fugit voluptatum, unde corporis fuga officia explicabo tempore, vitae molestias debitis iusto! Tempore quam reiciendis, impedit sequi optio cum necessitatibus earum! Dicta sequi, tempora nesciunt eius recusandae voluptas. Ab, minima nobis.</p>
						</div><!--end 3 col-->
					
					
					
					</div><!--end of row-->
				</div>
			
			</section>
			
			<section class="team-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1>Our Team which powers <br> <strong class='orangeText'>Vighnaharta Nidhi</strong></h1>
						</div>
					</div><!--end of row-->
					
					<div class="row">
						<div class="col-md-4 col-md-offset-2 col-sm-6">
							<div class="team-2-member">
								<div class="image-holder">
									<img alt="Team Member" class="background-image" src="img/team-large-1.jpg">
									
								</div>
								<span class="name  textBold orangeText">Mangesh Kulkarni</span>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
								</p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6">
							<div class="team-2-member">
								<div class="image-holder">
									<img alt="Team Member" class="background-image" src="img/team-large-2.jpg">
									
								</div>
								<span class="name">John Doe</span>
								<p>
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
								</p>
							</div>
						</div>
					</div><!--end of row-->
					
					
					
				</div><!--end of container-->
			</section>
			
			<section class="image-slider-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h1 class='orangeText'>Gallery</h1>
							<p class="lead">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
							</p>
							<div class="image-slider image-gallery">
								<ul class="slides displayGallery">
<!--									<li><img alt="Image Slider Image" src="img/slider1.jpg"></li>-->
<!--									<li><img alt="Image Slider Image" src="img/slider2.jpg"></li>-->

								</ul>
							</div><!--end of image slider-->
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
			
			
		</div>
<script src="js/jquery.min.js"></script>
<script>

    $.ajax({
        async: true,
        type: "POST",
        url: "helpers/sql_functions.php",
        data: { btnClicked: "showGallery" },
        success: function(response) {
            $(".displayGallery").html(response);
        }
    });
</script>
		<?php include 'templates/footer.php' ?>

