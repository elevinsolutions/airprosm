<?php 

if (!empty($_POST) && $_POST['action'] == 'subscribe'){

			global $wpdb;

			try {
				// save the appointment to db
				$wpdb->insert($wpdb->prefix . "subscriptions",array(
							'email'=>$_POST['email']
				));

				echo 'Email Successfully Subscribed!';
			} catch (Exception $e) {
				echo $e;
			}	

}

?>