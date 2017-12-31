<?php 


if (!empty($_POST) && $_POST['action'] == 'apply_career'){

			global $wpdb;
			if ( ! function_exists( 'wp_handle_upload' ) ) { require_once( ABSPATH . 'wp-admin/includes/file.php' );}

			try {

				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "career_applications",array(
							'name'=>$_POST['contact_name'],
							'email'=>$_POST['email'],
							'phone'=>$_POST['contact_number']
				));

				// upload resume to server
				$uploadedfile = $_FILES['resume'];
				$upload_overrides = array( 'test_form' => false );
				$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

				// get uploaded resume as attachment file
				if ( $movefile && ! isset( $movefile['error'] ) ) {
				    $attachment = $movefile["file"];
				}

				// notify admin via email + resume attachment
				$to = get_option( 'admin_email' );
				$subject = 'Air Pros Mechanical career application';
				$message = "Hi admin, \r\n \r\n" 
							. "A client has applied a career with the following details:\r\n \r\n"
							. "Name: "	.$_POST['contact_name']." \r\n"
							. "Email: "	.$_POST['email']." \r\n"
							. "Phone: "	.$_POST['contact_number']." \r\n";
				$headers = 'From: AirProsMechanical <airpros@airpros.com>' . "\r\n";
				wp_mail( $to, $subject, $message, $headers, $attachment );

				// delete file after use
				wp_delete_file( $movefile["file"] );

				$alert_class = 'alert-success';
				$alert_message = 'Career Successfully Applied! We will get in touch with you soon.';

			} catch (Exception $e) {
				$alert_class = 'alert-danger';
				$alert_message = 'Oops, something went wrong on our end. Please try submitting again in a little while.';
			}	


			?>

			<div class="alert <?=$alert_class?>" role="alert"> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?=$alert_message?>
			</div>
<?php

}

?>

