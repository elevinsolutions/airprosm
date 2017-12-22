<?php session_start(); get_header(); ?>

<section class="hero">
    <div class="row">
        <div class="heroImage">
            <div class="heroInsideContent" style="padding-top: 350px; text-align:center;">
                <h2>We make families stay at home</h2>
                <h4>AirPro's Mechanical. A heating and air conditioning company.</h4>
                <div style="margin-bottom:50px"></div>
                <div class="row">
                    <div class="heroBox" style="margin-top: 10px; padding-top:50px; padding-bottom:70px; width:600px; background-color: #790202ab; margin: 0 auto;">

                        <input class=" col-md-offset-1 col-md-4" type="text" name="contact_email" placeholder="Email Address" />
                        <input class="col-md-4 col-md-offset-1" type="email" name="contact_phone" placeholder="Phone Number" />

                        <br />
                        <input type="submit" class="btn-hero btn-lg btn-primary" style="margin-top:20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whyUs">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <img class="whyUsIcons" src="<?php echo get_template_directory_uri(); ?>/images/Flat1.png">
                <h3>Low Price</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu arcu at lectus suscipit posuere. Aliquam porttitor lobortis dolor, vitae fringilla leo molestie et. Donec condimentum aliquet neque sit amet luctus.</p>
            </div>
            <div class="col-md-4">
                <img class="whyUsIcons" src="<?php echo get_template_directory_uri(); ?>/images/Flat2.png">
                <h3>Exclusive Supplier/Service</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu arcu at lectus suscipit posuere. Aliquam porttitor lobortis dolor, vitae fringilla leo molestie et. Donec condimentum aliquet neque sit amet luctus. </p>
            </div>
            <div class="col-md-4">
                <img class="whyUsIcons" src="<?php echo get_template_directory_uri(); ?>/images/Flat3.png">
                <h3>Flat Rate</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu arcu at lectus suscipit posuere. Aliquam porttitor lobortis dolor, vitae fringilla leo molestie et. Donec condimentum aliquet neque sit amet luctus. </p>
            </div>
        </div>
    </div>
</section>

<section id="weAre" class="weAre">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="leftSideWeAre">
                    <h4>We are..</h4>
                    <h1>Air Pros Mechanical</h1>

                    <p>We pride ourself on being a one stop shop that is able to meet all of our client’s needs. Our goal is to provide the highest quality design and installation services, on schedule, and on budget along with outstanding customer service.We understand that time and cost are crucial so we strive to go above and beyond our client’s expectations. For our customers peace of mind, we offer valuable money saving service and maintenance contracts. Please call for additional details.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rightSideWeAre">
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/productsSlideshow.png">
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/productsSlideshow.png">
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/productsSlideshow.png">
                    </div>
                    <div class="col-md-12">
                        <div class="rightSideText">
                            <h4>Our Products</h4>
                            <p>We have over 25 years experience in the heating, ventilation and air conditioning industry (HVAC). We believe in quality customer service. We are here when you need us to service both your residential and commercial properties!

                            </p>
                            <br />
                            <a href="<?php echo get_bloginfo('wpurl'); ?>/product">Check out our Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services">

	<div class="container">
		<div class="row text-center"><br>
	        <div class="col-md-4 col-sm-4">
	            <img src="http://placehold.it/150/ffa500/ffffff/?text=Service%201" alt="" class="img-circle img-thumbnail">
	            <h3>Our Services</h3>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
	            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	        </div>
	        <div class="col-md-4 col-sm-4">
	            <img src="http://placehold.it/150/ffa500/ffffff/?text=Service%202" alt="" class="img-circle img-thumbnail">
	            <h3>Our Services</h3>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
	            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	        </div>
	        <div class="col-md-4 col-sm-4">
	            <img src="http://placehold.it/150/ffa500/ffffff/?text=Service%203" alt="" class="img-circle img-thumbnail">
	            <h3>Our Services</h3>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
	            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	        </div>
		</div>
	</div>
	
</section>

<section style="display:none;">
	
	<h1>Subscribe to newsletter</h1>

	<?php include 'includes/subscribe_form.php'; ?>

	<form method="post" enctype="multipart/form-data" id="subscribe_form">
		<input type="hidden" name="action" value="subscribe">
		<input type="email" name="email" 		placeholder="Email" 	maxlength="25">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</section>

<section style="display:none;">
	
	<h1>Schedule an Appointment</h1>

	<?php include 'includes/schedule_form.php'; ?>

	<form method="post" enctype="multipart/form-data" id="schedule_form">
		<input type="hidden" name="action" value="schedule">
		<input type="text" 	name="contact_name" placeholder="Name" 		maxlength="25">
		<br>
		<input type="email" name="email" 		placeholder="Email" 	maxlength="25">
		<br>
		<input type="tel" 	name="phone" 		placeholder="Mobile No." maxlength="15">
		<br>
		<input type="text" 	name="company" 		placeholder="Company">
		<br>
		<textarea name="message" placeholder="Message"></textarea>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

</section>

<section id="testimonials" class="testimonials">
	<div style="padding-bottom: 50px; padding-top: 50px;">
		<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
			<div class="testimonial4_header">
				<h4>what our clients are saying</h4>
			</div>
			<ol class="carousel-indicators">
				<li data-target="#testimonial4" data-slide-to="0" class="active"></li>
				<li data-target="#testimonial4" data-slide-to="1"></li>
				<li data-target="#testimonial4" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="testimonial4_slide">
						<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
						<h4>Ben Hanna</h4>
					</div>
				</div>
				<div class="item">
					<div class="testimonial4_slide">
						<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
						<h4>Ben Hanna</h4>
					</div>
				</div>
				<div class="item">
					<div class="testimonial4_slide">
						<p>Lorem ipsum dolor sit amet adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
						<h4>Ben Hanna</h4>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
				<span class="fa fa-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
				<span class="fa fa-chevron-right"></span>
			</a>
		</div>

		<div style="text-align: center;">
				<a href="#" class="btn btn-default btn-lg">Leave a Review</a>
		</div>
	</div>
</section>

<section style="display:none;">
	<?php echo do_shortcode('[RICH_REVIEWS_SHOW num="3"]'); ?>
</section>

<section id="contact">
  <div class="container">

	<h1 style="text-align: center; font-size: 50px; padding-top: 20px;">Contact Us</h1>
  	<h4 style="font-style: italic;text-align: center;">or be part of our team!</h4>
	
	<?php include 'includes/contact_form.php'; ?>

	<div class="row" style="margin-top:50px; margin-bottom:100px;">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="570" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
        <form method="post" enctype="multipart/form-data" id="contact_form" class="contact_form"> 
        	<input type="hidden" name="action" value="contact">
            <input type="text" name="contact_name" value="" placeholder="Name">
            <input type="email" name="email" value="" placeholder="E-mail">
            <input type="tel" name="phone" value="" placeholder="Phone">
            <textarea name="message" rows="3" style="height: 250px;" placeholder="Message"></textarea>
          	
          	<?php include "libraries/captcha/simple-php-captcha.php"; $_SESSION['captcha'] = simple_php_captcha(); ?>
			<img src="<?=$_SESSION['captcha']['image_src']?>" alt="CAPTCHA" style="width: 100px;"/>
			<input type="text" name="captcha" placeholder="Type code" style="width: 70%;">
          	<button class="btn btn-default" type="submit" name="button">
            	<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          	</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>