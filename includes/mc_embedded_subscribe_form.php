<?php	
	if(empty($_POST['mce_EMAIL']) || empty($_POST['input_543']) || empty($_POST['mc_embedded_subscribe']))
	{
		return false;
	}
	
	$mce_EMAIL = $_POST['mce_EMAIL'];
	$input_543 = $_POST['input_543'];
	$mc_embedded_subscribe = $_POST['mc_embedded_subscribe'];
	
	$to = 'undefined'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from NHS.";
	$email_body = "You have received a new message. \n\n".
				  "Mce_Email: $mce_EMAIL \nInput_543: $input_543 \nMc_Embedded_Subscribe: $mc_embedded_subscribe \n";
	$headers = "From: undefined\n";
	$headers .= "Reply-To: $mce_EMAIL";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>