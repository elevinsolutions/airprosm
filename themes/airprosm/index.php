<?php session_start(); get_header(); ?>


<section>
	<h1>Reviews</h1>

	<?php echo do_shortcode('[RICH_REVIEWS_SHOW num="3"]'); ?>
</section>

<hr>

<section>
	
	<h1>Subscribe to newsletter</h1>

	<?php include 'includes/subscribe_form.php'; ?>

	<form method="post" enctype="multipart/form-data" id="subscribe_form">
		<input type="hidden" name="action" value="subscribe">
		<input type="email" name="email" 		placeholder="Email" 	maxlength="25">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</section>

<hr>

<section>
	
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

<hr>

<section class="contact_us">

	<h1>Contact Us</h1>

	<?php include 'includes/contact_form.php'; ?>

	<form method="post" enctype="multipart/form-data" id="contact_form">

			<input type="hidden" name="action" value="contact">
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
			<?php include "libraries/captcha/simple-php-captcha.php"; $_SESSION['captcha'] = simple_php_captcha(); ?>
			<img src="<?=$_SESSION['captcha']['image_src']?>" alt="CAPTCHA" style="width: 100px;"/>
			<br>
			<input type="text" name="captcha" placeholder="Type code">
			<br>
			<input type="submit" name="submit" value="Leave a Message">

	</form>

</section>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>