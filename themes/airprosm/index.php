<?php session_start(); get_header(); ?>

<section>
	
	<h1>Schedule an Appointment</h1>

	<?php include 'includes/schedule_form.php'; ?>

	<form method="post" enctype="multipart/form-data" id="schedule_form">
		<input type="hidden" name="action" value="schedule">
		<br>
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
			<br>
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


<?php get_footer(); ?>