<?php 
	if (!empty($_POST) && $_POST['action'] == 'schedule'){
			
			global $wpdb;

			try {
				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "appointments",array(
							'name'=>$_POST['contact_name']
				));

				$appointment_id = $wpdb->insert_id;

				// notify admin via email
				$to = get_option( 'admin_email' );
				$subject = 'Air Pros Mechanical Schedule Form';
				$message = "Hi admin, \r\n \r\n" 
							. "A client has booked an appointment with the following details:\r\n \r\n"
							. "Name: "	.$_POST['contact_name']." \r\n"
							. "email: "	.$_POST['email']." \r\n"
							. "phone: "	.$_POST['phone']." \r\n"
							. "company: ".$_POST['company']." \r\n"
							. "message: ".$_POST['message']." \r\n";

				
				wp_mail( $to, $subject, $message );


				echo 'Appointment Successfully Booked!';
			} catch (Exception $e) {
				echo $e;
			}
			
	}
?>