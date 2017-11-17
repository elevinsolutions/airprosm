<?php 
	if (!empty($_POST) && $_POST['action'] == 'contact'){
			if (($_POST['captcha'] == $_SESSION['captcha']['code'])){
				echo 'your message has been submitted';

				$to = get_option( 'admin_email' );
				$subject = 'AirProsMechanical Contact Us Form';
				$message = "Hi admin, \r\n \r\n" 
							. "A client has submitted through with your contact form with the following details:\r\n \r\n"
							. "Name: "	.$_POST['contact_name']." \r\n"
							. "email: "	.$_POST['email']." \r\n"
							. "phone: "	.$_POST['phone']." \r\n"
							. "company: ".$_POST['company']." \r\n"
							. "message: ".$_POST['message']." \r\n";

				
				wp_mail( $to, $subject, $message );

			}else {
				echo 'wrong captcha';
			}
	}
?>