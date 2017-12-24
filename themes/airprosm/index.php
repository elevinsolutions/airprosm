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

                    <?php include 'includes/subscribe_form.php'; ?>

					<form method="post" enctype="multipart/form-data" id="subscribe_form" style="color: black;"> 
						<input type="hidden" name="action" value="subscribe">

                        <input class="col-md-offset-1 col-md-4" type="email" name="email" placeholder="Email Address" />
                        <input class="col-md-4 col-md-offset-1" type="text" name="phone" placeholder="Phone Number" />

                        <br />
                        <input type="submit" class="btn-hero btn-lg btn-primary" style="margin-top:20px;">
                    </form>
                    </div>
                </div>
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

	<div class="container" style="padding-top: 150px;">
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

<section id="testimonials" class="testimonials">
	<div style="padding-bottom: 50px; padding-top: 50px;">
		<div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x text-center" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
			<div class="testimonial4_header">
				<h4>What our clients are saying</h4>
			</div>
			<ol class="carousel-indicators" style="top: 360px;">
				<li data-target="#testimonial4" data-slide-to="0" class="active"></li>
				<li data-target="#testimonial4" data-slide-to="1"></li>
				<li data-target="#testimonial4" data-slide-to="2"></li>
			</ol>

			<i class="fa fa-quote-left" aria-hidden="true" style="color: red; font-size: 25px;"> </i>

			<div class="carousel-inner" role="listbox" style="height: 200px;">



				<? 
					global $wpdb;
					$reviews = $wpdb->get_results( "SELECT * FROM `".$wpdb->prefix."richreviews` where review_status = '1'", OBJECT );
				?>
				<? foreach ($reviews as $index => $review): ?>

					<? $active_class = ($index == 0) ? 'active' : '' ; ?>
					<div class="item <?=$active_class?>">
						<div class="testimonial4_slide">
							<p><?=$review->reviewer_name?></p>
							<h4><?=$review->review_text?></h4>
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
		</div>
	</div>
</section>

<section id="careers" class="careers">
	<div class="container" style="padding-top: 100px;padding-bottom: 100px;">
			
			<div class="col-xs-6">
				<h1 style="font-size: 42px;">Be part of our team!</h1>

				<p style="font-size: 28px;color: #b1b1b1;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequunter magni dolores eos qui ratione.</p>
			</div>


			<div class="col-xs-6">
				<div class="well" style="padding-top: 50px;padding-bottom: 50px;padding-left: 50px;padding-right: 50px;background-color: #D8D8D8;border-radius: 0px;">
					
					<?php include 'includes/career_form.php'; ?>

					<form method="post" enctype="multipart/form-data" id="career_form" class="career_form">  
						<input type="hidden" name="action" value="apply_career">
						<div col-xs-12> 
							<input type="text" name="contact_name" placeholder="Full Name*">
						</div>
						<div col-xs-12> 
							<input type="contact_number" name="contact_number" placeholder="Contact Number*">
						</div>
						<div col-xs-12> 
							<input type="email" name="email" placeholder="Email Address">
						</div>
						<div col-xs-12>
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

			<h1 style="text-align: center; font-size: 50px;">Write a review</h1>
			<p class="text-center">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>

			<?php include 'includes/review_form.php'; ?>

			<form method="post" id="review_form"  class="review_form" style="text-align: center;">
				<input type="hidden" name="action" value="review">

				<div class="col-xs-4 col-xs-offset-2">
					<input type="text" name="contact_name" placeholder="Name">
				</div>

				<div class="col-xs-4">
					<input type="email" name="email" placeholder="E-mail">
				</div>

				<div class="col-xs-8 col-xs-offset-2">
		 			<textarea name="message" rows="3" style="height: 250px;" placeholder="Message"></textarea>
		 		</div>

		 		<div class="col-xs-4 col-xs-offset-4">
			 		<button class="btn btn-default btn-block btn-lg" type="submit" name="button">Submit</button>
		      	</div>
	      	</form>
      	
	</div>
</section>

<!-- line modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">

	<?php include 'includes/quote_form.php'; ?>
	<form method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="quote">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Get a Quote</h3>
		</div>

		<div class="modal-body">
			
            <!-- content goes here -->

				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h4>Contact Info</h4>
						<input type="text" name="contact_name" class="form-control" placeholder="Full Name"> <br>
						<input type="email" name="email" class="form-control" placeholder="Email"> <br>
						<input type="text" name="phone" class="form-control" placeholder="Contact Number">
					</div>
					<div class="col-sm-12 col-md-6">
						<h4>What are you inquiring about?</h4>
						<select name="category" class="form-control" name="category">
							<option> -- Select Product (if applicable) -- </option>

							<? foreach(get_categories() as $category): ?>

								<option value="<?= $category->cat_name; ?>"><?= $category->cat_name; ?></option>

							<? endforeach; ?>
						</select> <br>
						<textarea name="comment" style="height: 90px;" class="form-control" placeholder="Comments"></textarea>
					</div>
				</div>

		</div>

		<div class="modal-footer">
			<div class="btn-group" role="group">
				<button type="submit" class="btn btn-default btn-hover-green pull-right" data-action="save" role="button">Submit</button>
			</div>
		</div>
	</form>

	</div>
  </div>
</div>

<script type="text/javascript">
	

	function scrollToPage(section){
      $('html, body').animate({
            scrollTop: $("#"+section).offset().top
        }, 1000);
    }

</script>
<?php get_footer(); ?>