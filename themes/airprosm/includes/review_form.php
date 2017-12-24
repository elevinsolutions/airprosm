<?php 
if (!empty($_POST) && $_POST['action'] == 'review'){

			global $wpdb;

			try {
				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "richreviews",array(
							'reviewer_name'=>$_POST['contact_name'],
							'reviewer_email'=>$_POST['email'],
							'review_text'=>$_POST['message']
				));

				echo 'Thank you for your review!';
			} catch (Exception $e) {
				echo $e;
				echo 'test';
			}	

}

?>