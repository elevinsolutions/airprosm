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

				echo 'Email Successfully Subscribed!';
			} catch (Exception $e) {
				echo $e;
			}	

}

?>