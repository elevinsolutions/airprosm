<?php session_start(); get_header(); ?>

<section class="hero">


  <div id="heroCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#heroCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="heroImage">
            <div class="heroInsideContent" style="text-align:center;">
            	<div class="container">
            		<div class="heroMainTitle">
		                <h2>Stay Comfortable At Home All Year Round</h2>
		                <h4 style="font-size:21px;">Air Pros Mechanical has the solution for every heating and air conditioning needs.</h4>
	                </div>
	                <div style="margin-bottom:50px"></div>

	                <?php include 'includes/subscribe_form.php'; ?>
	                
	                <div class="row">
	                    <div class="heroBox col-sm-6 col-sm-offset-3 col-xs-12">

						<form method="post" enctype="multipart/form-data" id="subscribe_form" style="color: black;"> 
							<input type="hidden" name="action" value="subscribe">

	                        <input class="col-xs-5 col-xs-offset-1 col-md-offset-2 col-md-4" type="email" name="email" placeholder="Email Address" required />
	                        <input class="col-xs-5 col-md-4" style="margin-left:10px;" type="text" name="phone" placeholder="Phone Number" required />

	                        <br />
	                        <input type="submit" class="btn-hero btn-lg btn-primary" style="margin-top:20px;">
	                    </form>
	                    </div> <!-- heroBox -->
	                </div>
            	</div>
            </div>
        </div>
      </div>

      <div class="item">
         <div class="heroImage2">
            <div class="heroInsideContent" style="text-align:center;">
            	<div class="container">
            		<div class="heroMainTitle">
		                <h2 style="font-size:45px; font-family: 'Roboto Condensed', sans-serif;">Heat up!</h2>
		                <h4 style="font-size:23px; font-family: 'Roboto Condensed', sans-serif; text-shadow:-9px 2px 10px rgb(85, 85, 85);">Winter is here and Air Pros Mechanical has the products for your heating needs!</h4>
	                </div>
	                <div style="margin-bottom:50px"></div>

	                <?php include 'includes/subscribe_form.php'; ?>
	                
	                <div class="row">
	                    <div class="heroBox col-sm-6 col-sm-offset-3 col-xs-12" style="margin-top: 10px; padding-top:50px; padding-bottom:50px; background-color: #790202ab;">

						<form method="post" enctype="multipart/form-data" id="subscribe_form" style="color: black;"> 
							<input type="hidden" name="action" value="subscribe">

	                        <input class="col-xs-5 col-xs-offset-1 col-md-offset-2 col-md-4" type="email" name="email" placeholder="Email Address" required />
	                        <input class="col-xs-5 col-md-4" style="margin-left:10px;" type="text" name="phone" placeholder="Phone Number" required />

	                        <br />
	                        <input type="submit" class="btn-hero btn-lg btn-primary" style="margin-top:20px;">
	                    </form>
	                    </div> <!-- heroBox -->
	                </div>
            	</div>
            </div>
        </div>
      </div>
    

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#heroCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#heroCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

       <!--
        <div class="heroImage">
            <div class="heroInsideContent" style="text-align:center;">
            	<div class="container">
	                <h2>Stay Comfortable At Home All Year Round</h2>
	                <h4>Air Pros Mechanical has the solution for every heating and air conditioning needs.</h4>
	                <div style="margin-bottom:50px"></div>

	                <?php include 'includes/subscribe_form.php'; ?>
	                
	                <div class="row">
	                    <div class="heroBox col-sm-6 col-sm-offset-3 col-xs-12" style="margin-top: 10px; padding-top:50px; padding-bottom:125px; background-color: #790202ab;">

						<form method="post" enctype="multipart/form-data" id="subscribe_form" style="color: black;"> 
							<input type="hidden" name="action" value="subscribe">

	                        <input class="col-xs-5 col-xs-offset-1 col-md-offset-2 col-md-4" type="email" name="email" placeholder="Email Address" required />
	                        <input class="col-xs-5 col-md-4" style="margin-left:10px;" type="text" name="phone" placeholder="Phone Number" required />

	                        <br />
	                        <input type="submit" class="btn-hero btn-lg btn-primary" style="margin-top:20px;">
	                    </form>
	                    </div> <heroBox 
	                </div>
            	</div>
            </div>
        </div>

         -->
</section>

<section id="weAre" class="weAre">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="leftSideWeAre">
                    <h4>We are..</h4>
                    <h1>Air Pros Mechanical</h1>

                    <p>Since 2013, Air Pros Mechanical, Inc. has been installing and repairing heating and air conditioning systems in Chicagoland and surrounding suburbs. We are a Bryant dealer with a team of highly-trained, licensed sales engineers and field technicians. Integrity is our foremost value and we assure transparency when it comes to telling customers how much it would cost to complete the job perfectly. This is why we are one of the most trusted HVAC companies in our service area.

Call us today and let’s talk about how we can help you with your HVAC needs.
</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rightSideWeAre">
                	<div class="rightSideImages">
	                    <div class="col-md-3 col-sm-4 col-xs-4">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/WeAreImage1.jpg">
	                    </div>
	                    <div class="col-md-3  col-md-offset-1 col-sm-4 col-xs-4">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/WeAreImage2.jpg">
	                    </div>
	                    <div class="col-md-3  col-md-offset-1 col-sm-4 col-xs-4">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/WeAreImage3.jpg">
	                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="rightSideText">
                            <h4>Our Products</h4>
                            <p>We have over 10 years experience in the heating, ventilation and air conditioning industry (HVAC). We believe in quality customer service. We are here when you need us to service both your residential and commercial properties!

                            </p>
                            <br />
                            <a class="btn checkOutProducts" href="<?php echo get_bloginfo('wpurl'); ?>/product">Check out our Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="parallax-one text-center">
      <h2 style="color: white;
    text-align: center;
    font-size:42px;">CUSTOMER SATISFACTION GUARANTEED</h2>

	    <div style="padding-top: 15px; padding-bottom: 15px;">

	    <div class="clearfix"> 
			<p class="col-md-8 col-md-offset-2 col-xs-12" style="color:white; font-size: 18px;">As a Bryant dealer, we provide top-of-the line equipment to our customers. Our sales engineers and field technicians are certified experts with hundreds of successful projects under their hands.  You can rely on us to get best-in-class service that is tailor-fit to your preferences and budget.

			Call us now and we’ll gladly assist you with any heating and air conditioning needs.
			</p>
		</div>

	    </div>

    </div>
</section>

<!--
<section class="ourWork" style="padding-top:50px; padding-bottom: 50px; background-color:#f5f5f585">
	   <div class="container">
			<div class="row text-center">
				       <h2 style="font-size: 35px;
				    margin-bottom: 50px; color: #ab1e1e;">Our Work</h2>
			</div>
	   </div>

  <div id="ourWorkCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#ourWorkCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#ourWorkCarousel" data-slide-to="1"></li>
      <li data-target="#ourWorkCarousel" data-slide-to="2"></li>
    </ol>

    
    <div class="carousel-inner">
      <div class="item active">
           <div class="container">

			    <div class="row">

					<div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork1.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Your Home, Your Refuge</h4>
							    </div>
								<p class="panel_text">Relax and enjoy your winter refuge with exceptional comfort and savings. The variable-speed Model 926T delivers evenly controlled airflow and a significant reduction in temperature swings . As the focal point for year-round comfort, this furnace offers enhanced summer humidity control capabilities as well.</p>
							  
								
							</div>
						</div>	
			        </div>
			        <div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork2.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">

							    <div class="panel-work-title">
									<h4 class="panel_header">Atmospheric Vent Gas Models</h4>
							    </div>
								<p class="panel_text">Bradford White's Defender System Atmospheric Vent water heaters utilize a draft diverter and are atmospherically vented with capacities ranging from 30 to 50 gallons and inputs ranging from 30,000-50,000 BTU/Hr. Defender Atmospheric Vent models are perfect for many standard water heating applications</p>
							  

								
							</div>
						</div>	
			        </div>
			        <div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork3.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Quiet Comfort, and Cool Savings</h4>
							    </div>
								<p class="panel_text">Enjoy cool, summer comfort and energy savings of up to 16 SEER with our single-stage Preferred central air conditioner. This model can help cut your utility bills while you relax with reliable whole-home comfort that's as quiet as running your dishwasher.</p>
							  

							</div>
						</div>	
			        </div>
					<div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork4.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Work-Horse Reliability at a Reasonable Price</h4>
							    </div>

								<p class="panel_text">Payne furnaces like the Payne PG8MEA gas furnace are known for work-horse reliability and very good performance at reasonable prices.  Lower initial costs are added to good fuel efficiency for a winning combination.</p>
							  
								
							</div>
						</div>	
			        </div>
			    </div>
         </div>
      </div>

      <div class="item">
         <div class="container">

			    <div class="row">

					<div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork5.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Your Home, Your Refuge</h4>
							    </div>
								<p class="panel_text">Relax and enjoy your winter refuge with exceptional comfort and savings. The variable-speed Model 926T delivers evenly controlled airflow and a significant reduction in temperature swings . As the focal point for year-round comfort, this furnace offers enhanced summer humidity control capabilities as well.</p>
							  
								
							</div>
						</div>	
			        </div>
			        <div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork6.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">

							    <div class="panel-work-title">
									<h4 class="panel_header">Atmospheric Vent Gas Models</h4>
							    </div>
								<p class="panel_text">Bradford White's Defender System Atmospheric Vent water heaters utilize a draft diverter and are atmospherically vented with capacities ranging from 30 to 50 gallons and inputs ranging from 30,000-50,000 BTU/Hr. Defender Atmospheric Vent models are perfect for many standard water heating applications</p>
							  

								
							</div>
						</div>	
			        </div>
			        <div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork7.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Quiet Comfort, and Cool Savings</h4>
							    </div>
								<p class="panel_text">Enjoy cool, summer comfort and energy savings of up to 16 SEER with our single-stage Preferred central air conditioner. This model can help cut your utility bills while you relax with reliable whole-home comfort that's as quiet as running your dishwasher.</p>
							  

							</div>
						</div>	
			        </div>
					<div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork8.JPG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Work-Horse Reliability at a Reasonable Price</h4>
							    </div>

								<p class="panel_text">Payne furnaces like the Payne PG8MEA gas furnace are known for work-horse reliability and very good performance at reasonable prices.  Lower initial costs are added to good fuel efficiency for a winning combination.</p>
							  
								
							</div>
						</div>	
			        </div>
			    </div>
         </div>
      </div>

      <div class="item">
         <div class="container">

			    <div class="row">

					<div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork9.JPEG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Your Home, Your Refuge</h4>
							    </div>
								<p class="panel_text">Relax and enjoy your winter refuge with exceptional comfort and savings. The variable-speed Model 926T delivers evenly controlled airflow and a significant reduction in temperature swings . As the focal point for year-round comfort, this furnace offers enhanced summer humidity control capabilities as well.</p>
							  
								
							</div>
						</div>	
			        </div>
			        <div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork10.JPEG"></a></h4>
								
							</div>
							
							<div class="panel-body">

							    <div class="panel-work-title">
									<h4 class="panel_header">Atmospheric Vent Gas Models</h4>
							    </div>
								<p class="panel_text">Bradford White's Defender System Atmospheric Vent water heaters utilize a draft diverter and are atmospherically vented with capacities ranging from 30 to 50 gallons and inputs ranging from 30,000-50,000 BTU/Hr. Defender Atmospheric Vent models are perfect for many standard water heating applications</p>
							  

								
							</div>
						</div>	
			        </div>
			        <div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork11.JPEG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Quiet Comfort, and Cool Savings</h4>
							    </div>
								<p class="panel_text">Enjoy cool, summer comfort and energy savings of up to 16 SEER with our single-stage Preferred central air conditioner. This model can help cut your utility bills while you relax with reliable whole-home comfort that's as quiet as running your dishwasher.</p>
							  

							</div>
						</div>	
			        </div>
					<div class="col-md-3">
						<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
						
							<div class="panel-heading">
							
								<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo get_template_directory_uri(); ?>/images/ourWork12.JPEG"></a></h4>
								
							</div>
							
							<div class="panel-body">
							    <div class="panel-work-title">
									<h4 class="panel_header">Work-Horse Reliability at a Reasonable Price</h4>
							    </div>

								<p class="panel_text">Payne furnaces like the Payne PG8MEA gas furnace are known for work-horse reliability and very good performance at reasonable prices.  Lower initial costs are added to good fuel efficiency for a winning combination.</p>
							  
								
							</div>
						</div>	
			        </div>
			    </div>
         </div>
      </div>
    

    </div>

    
    <a class="left carousel-control" href="#ourWorkCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#ourWorkCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

-->


<section class="ourWork" style="padding-top:50px; padding-bottom: 50px; background-color:#f5f5f585">
  <div class="container">

    <div class="row text-center">
       <h2 style="font-size: 35px;
    margin-bottom: 50px; color: #ab1e1e;">Our Work</h2>
    </div>

    <div class="row">

    	<?php
		$category_query_args = array(
		    'category_name' => 'Our Work'
		);

		$category_query = new WP_Query( $category_query_args );
		?>


    	<?php $post_count_display_limit = 4; ?>
		<?php if ( $category_query->have_posts() ) : $i = 1; while ( $category_query->have_posts() && $i < $post_count_display_limit + 1 ) : the_post(); ?>
		   

			<?php 

			if (has_post_thumbnail( $post->ID ) ){
			  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			}
			else{
				// set default image here
			}

			?>

			<div class="col-md-3">
				<div class="panel panel-default panel-front" onclick="setOurWorkModalContent($(this));">		
				
					<div class="panel-heading">
					
						<h4 class="panel-title"><a HREF="#" data-toggle="modal" data-target="#ourWorkModal"><img class="panel_image" src="<?php echo $image[0]; ?>"></a></h4>
						
					</div>
					
					<div class="panel-body">
					    <div class="panel-work-title">
							<h4><?php the_title(); ?></h4>
					    </div>
						<p><?php the_content(); ?></p>
					  
						
					</div>
				</div>	
	        </div>



		<?php $i++; endwhile; endif; ?>

    </div>
  </div>
     
</section>



<section id="services" class="services">

	<div class="container" style="padding-top: 100px;">
		<div class="row text-center">
         <h2 style="font-size: 35px;
    margin-bottom: 50px; color: #ab1e1e;">We Service All Makes and Models</h2>
		</div>
		<div class="row text-center"><br>
	        <div class="col-md-4 col-sm-4" style="margin-bottom:70px;">
	            <i class="fa fa-wrench circularIcon" aria-hidden="true"></i>
	            <h3>Repair</h3>
	            <p>A broken heater or AC should not disrupt your life or take away the usual level of comfort in your indoor space for too long. Call Air Pros and a team of highly-experienced technicians will come to get your broken unit up and running in no time.</p>
	        </div>
	        <div class="col-md-4 col-sm-4" style="margin-bottom:70px;">
	            <i class="fa fa-cogs circularIcon" aria-hidden="true"></i>
	            <h3>Maintenance</h3>
	            <p>Make your heater and air conditioner function at its best for the maximum lifespan by having them regularly checked and fine-tuned. Save yourself from the hassle by getting proper maintenance. This does not only prevent trouble but also means more savings in the long run.</p>
	        </div>
	        <div class="col-md-4 col-sm-4" style="margin-bottom:70px;"> 
	            <i class="fa fa-thermometer-three-quarters circularIcon" aria-hidden="true"></i>
	            <h3>Installation</h3>
	            <p>Installation of new equipment is a guaranteed stress-free experience for our clients. We get it done right and right away. Unsure of what product best suits your needs? We are here to help. We always make sure that our customers are happy with their purchase and new installation in their homes and offices.</p>
	        </div>
		</div>
		<div class="row text-center">
	         <h4 style="font-size: 18px;
    margin-top: 30px; color:#ab1e1e;">Boilers - Air Conditioners - Heaters - Furnaces - Heat Pumps - Air Filtration - System Controls
			 </h4>
		</div>
	</div>
	
</section>

<section id="testimonials" class="testimonials">
	<div class="container-fluid">
		<div style="padding-bottom: 50px; padding-top: 20px;">
			<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x text-center" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
				<div class="testimonial4_header">
					<h4>What our clients are saying</h4>
				</div>

				<? 
					global $wpdb;
					$reviews = $wpdb->get_results( "SELECT * FROM `".$wpdb->prefix."richreviews` where review_status = '1'", OBJECT );
				?>

				<i class="fa fa-quote-left" aria-hidden="true" style="color: red; font-size: 25px;"> </i>

				<div class="carousel-inner" role="listbox">

					<? foreach ($reviews as $index => $review): ?>

						<? $active_class = ($index == 0) ? 'active' : '' ; ?>
						<div class="item <?=$active_class?>">
							<div class="testimonial4_slide">
								<p><?=$review->review_text?></p>
								<h4><?=$review->reviewer_name?></h4>
							</div>
						</div>

					<? endforeach; ?>

				</div>

				<i class="fa fa-quote-right" aria-hidden="true" style="color: red; font-size: 25px;"></i>
				<a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
					<span class="fa fa-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
					<span class="fa fa-chevron-right"></span>
				</a>

				<ol class="carousel-indicators" style="margin-top: 10px;position: unset;">
					<? foreach ($reviews as $index => $review): ?>
					<? $active_class = ($index == 0) ? 'active' : '' ; ?>
						<li data-target="#testimonial4" data-slide-to="<?=$index?>" class="<?=$active_class?>"></li>
					<? endforeach; ?>
				</ol>

			</div>
		</div>
	</div>
</section>

<section id="careers" class="careers">
	<div class="container" style="padding-top: 100px;padding-bottom: 100px;">
			
			<div class="col-xs-12 col-sm-5">

				<img src="<?php echo get_template_directory_uri(); ?>/images/AirProVan.jpg" style="width:100%; border-radius: 5px;border: solid 1px #bdbdbd;padding: 3px;">
				
				<h1>Be part of our team!</h1>

				<p>We are looking for skilled, reliable, and customer-focused technicians. Send us your resume and be part of our growing team.</p>
			</div>


			<div class="col-xs-12 col-sm-6 col-sm-offset-1">
				<div class="well">
					
					<?php include 'includes/career_form.php'; ?>

					<form method="post" enctype="multipart/form-data" id="career_form" class="career_form" onsubmit="return check_upload();" action="#careers">  
						<input type="hidden" name="action" value="apply_career">
						<div> 
							<input type="text" name="contact_name" placeholder="Full Name*" required>
						</div>
						<div> 
							<input type="contact_number" name="contact_number" placeholder="Contact Number*" required> 
						</div>
						<div> 
							<input type="email" name="email" placeholder="Email Address" required>
						</div>
						<div class="input-group" style="margin-bottom: 20px;"> 
                        	<input class="form-control disabled" placeholder="" id="upload-file-info" disabled=""> 
                            <span class="input-group-btn"> 
	                            <label class="btn btn-default" for="resume-upload" id="resume-upload-label" style="padding-top: 11px; height: 45px;">
	                                <input name="resume" id="resume-upload" type="file" style="display:none" accept="" onchange="$('#upload-file-info').val(this.files[0].name)" required>Upload Resume
	                            </label>
                            </span> 
                            
                        </div>
						<div>
				 		<button class="btn btn-default btn-block btn-lg" type="submit" name="button">
				        	Apply
				      	</button>
				      	</div>
			      	</form>
      			</div>
      		</div>
	</div>
</section>

<section id="review" class="review">
	<div class="container" style="padding-top: 50px;padding-bottom: 50px;">

			<h1 style="text-align: center; font-size: 50px;">Write a Review</h1>
			<p class="text-center" style="margin-bottom: 50px;">We’d love to hear your feedback! Tell us about your experience with Air Pros Mechanical.</p>

			<?php include 'includes/review_form.php'; ?>

			<form method="post" id="review_form"  class="review_form" style="text-align: center;" action="#review">
				<input type="hidden" name="action" value="review">

				<div class="col-xs-12 col-sm-4 col-sm-offset-2">
					<input type="text" name="contact_name" placeholder="Name" required>
				</div>

				<div class="col-xs-12 col-sm-4">
					<input type="email" name="email" placeholder="E-mail" required>
				</div>

				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		 			<textarea name="message" rows="3" style="height: 250px;" placeholder="Message" required></textarea>
		 		</div>

		 		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
			 		<button class="btn btn-default btn-block btn-lg" type="submit" name="button">Submit</button>
		      	</div>
	      	</form>
      	
	</div>
</section>

<!-- line modal -->
<div class="modal fade" id="ourWorkModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<!-- <h3 class="modal-title" id="modalPanelHeader"></h3> -->
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<div class="panel panel-default panel-front">		
						
				<div class="panel-heading">
				
					<h4 class="panel-title"><a href="#"><img style="max-height: 100%; max-width: 100%;" id="modalPanelImage" src=""></a></h4>
					
				</div>
				
				<!-- <div class="panel-body">
				    
					<p id="modalPanelText"></p>

				</div> -->
			</div>
		</div>
	</div>
  </div>
</div>

<script type="text/javascript">
	

	function scrollToPage(section){
      $('html, body').animate({
            scrollTop: $("#"+section).offset().top -120
        }, 1000);
    }

    function check_upload(){
    	var extension = $('#resume-upload').val().split('.').pop().toLowerCase();
		if($.inArray(extension, ['pdf']) == -1) {
		    alert('Please Upload PDF files only.');
		    return false;
		}

		var file_size = $('#resume-upload')[0].files[0].size; // in bytes
    	if (file_size > 499999){
    		alert('The file could not be uploaded because it is larger than the maximum allowed file size of 500 MB.');
    		return false;
    	}
    }

    $('#resume-upload').change(function () {
		check_upload();
	});

    function setOurWorkModalContent(element){


    	var panel_header = element.find('.panel_header').html();
    	var panel_text = element.find('.panel_text').html();
    	var img_src = element.find('.panel_image').attr('src');

    	$("#modalPanelHeader").html(panel_header);
    	$("#modalPanelText").html(panel_text);
    	$("#modalPanelImage").attr('src', img_src);
    }

</script>
<?php get_footer(); ?>