<?php 

if (!empty($_POST) && $_POST['action'] == 'apply_career'){

			global $wpdb;

			try {
				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "career_applications",array(
							'name'=>$_POST['contact_name'],
							'email'=>$_POST['email']
				));

				// notify admin via email
				$to = get_option( 'admin_email' );
				$subject = 'Air Pros Mechanical career application';
				$message = "Hi admin, \r\n \r\n" 
							. "A client has applied a career with the following details:\r\n \r\n"
							. "Name: "	.$_POST['contact_name']." \r\n";

				
				wp_mail( $to, $subject, $message );

				echo 'Career Successfully Applied!';
			} catch (Exception $e) {
				echo $e;
			}	

}

?>