<?php 
if (!empty($_POST) && $_POST['action'] == 'quote'){

			global $wpdb;

			try {
				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "quotes",array(
							'name'=>$_POST['contact_name'],
							'email'=>$_POST['email'],
							'phone'=>$_POST['phone'],
							'category'=>$_POST['category'],
							'comment'=>$_POST['comment']
				));

				// notify admin via email
				$to = get_option( 'admin_email' );
				$subject = 'Air Pros Mechanical quote application';
				$message = "Hi admin, \r\n \r\n" 
							. "A client has requested a quote with the following details:\r\n \r\n"
							. "Name: "	.$_POST['contact_name']." \r\n"
							. "Email: "	.$_POST['email']." \r\n"
							. "Phone: "	.$_POST['phone']." \r\n"
							. "Product Category: "	.$_POST['category']." \r\n"
							. "Comment: "	.$_POST['comment']." \r\n";

				
				wp_mail( $to, $subject, $message );

				echo "<script>alert('Quote Successfully Submitted! We will get in touch with you soon.');</script>";
			} catch (Exception $e) {
				// echo $e;
				echo "<script>alert('Oops, something went wrong on our end. Please try submitting again in a little while.');</script>";
			}	

}

?>