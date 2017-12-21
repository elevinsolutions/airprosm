<?php 
	if (!empty($_POST) && $_POST['action'] == 'contact'){
			if (($_POST['captcha'] == $_SESSION['captcha']['code'])){
?>
				<div class="alert alert-success" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					<strong>Thank you!</strong> Your message has been sent.
				</div>
<?php 
				$to = get_option( 'admin_email' );
				$subject = 'Air Pros Mechanical Contact Us Form';
				$message = "Hi admin, \r\n \r\n" 
							. "A client has submitted through with your contact form with the following details:\r\n \r\n"
							. "Name: "	.$_POST['contact_name']." \r\n"
							. "email: "	.$_POST['email']." \r\n"
							. "phone: "	.$_POST['phone']." \r\n"
							. "message: ".$_POST['message']." \r\n";

				
				wp_mail( $to, $subject, $message );

			}else {
?>
				<div class="alert alert-danger" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					Please re-enter the correct captcha message.
				</div>
<?php 

			}
	}
?>