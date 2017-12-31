<?php 

if (!empty($_POST) && $_POST['action'] == 'subscribe'){

			global $wpdb;

			try {
				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "subscriptions",array(
							'email'=>$_POST['email'],
							'phone'=>$_POST['phone']
				));

				// notify admin via email
				$to = $_POST['email'];
				$subject = 'Air Pros Mechanical subscription';
				$message = "Hi user, \r\n \r\n" 
							. "Thank you for subscribing.";

				
				wp_mail( $to, $subject, $message );

				// $alert_class = 'alert-success';
				// $alert_message = 'Email successfuly subscribed.';

				echo "<script>alert('Email successfuly subscribed.');</script>";

			} catch (Exception $e) {
				// $alert_class = 'alert-danger';
				// $alert_message = 'Oops, something went wrong on our end. Please try submitting again in a little while.';
				echo "<script>alert('Oops, something went wrong on our end. Please try submitting again in a little while.');</script>";
			}	


			?>

<?php

}

?>