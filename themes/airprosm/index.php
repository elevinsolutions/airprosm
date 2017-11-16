<?php session_start(); get_header(); ?>

<section class="contact_us">

	<?php if (!empty($_POST)){
		if (($_POST['captcha'] == $_SESSION['captcha']['code'])){
				echo 'correct';
			}else {
				echo 'wrong';
			}
		}
	?>

	<form method="post" enctype="multipart/form-data" id="contact_form">

			<input type="text" 	name="contact_name" placeholder="Name" 		maxlength="25">
			<input type="email" name="email" 		placeholder="Email" 	maxlength="25">
			<input type="tel" 	name="phone" 		placeholder="Mobile No." maxlength="15">
			<input type="text" 	name="company" 		placeholder="Company">
			<textarea name="message" placeholder="Message"></textarea>

			<?php 	include "libraries/captcha/simple-php-captcha.php";
					$_SESSION['captcha'] = simple_php_captcha();
					echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" style="width: 100px;"/>';
			?>
			
			<input type="text" name="captcha" placeholder="Type code">
			<input type="submit" name="submit" value="Leave a Message">

	</form>

</section>


<?php get_footer(); ?>