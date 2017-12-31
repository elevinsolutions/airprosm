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

				$alert_class = 'alert-success';
				$alert_message = 'Thank you for your review! It will now be posted once approved by our team.';
			} catch (Exception $e) {
				// echo $e;
				$alert_class = 'alert-danger';
				$alert_message = 'Oops, something went wrong on our end. Please try submitting again in a little while.';
			}	

			?>

			<div class="alert <?=$alert_class?>" role="alert" style="text-align: center;"> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?=$alert_message?>
			</div>
<?php

}

?>