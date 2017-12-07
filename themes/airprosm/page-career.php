<?php session_start(); get_header(); ?>

<br>
<br>
<br>
<br>
<section>

<h1>Career</h1>

<?php include 'includes/career_form.php'; ?>

	<form method="post" enctype="multipart/form-data" id="career_form">
		<input type="hidden" name="action" value="apply_career">
		<input type="text" name="contact_name" placeholder="Name">
		<br>
		<input type="text" name="email" placeholder="email">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</section>

<?php get_footer(); ?>