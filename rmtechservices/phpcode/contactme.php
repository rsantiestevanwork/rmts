<?php 

$contact = $_POST['contact'];
$result = '';
if(isset($contact['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@rmtechservices.com";
    $email_subject = "web form contact us";
 
    // validation expected data exists
	
    if(!isset($contact['first_name']) ||
        !isset($contact['last_name']) ||
        !isset($contact['email']) ||
        !isset($contact['phone'])) {
			echo('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

	$first_name = $contact['first_name']; // required 
    $last_name = $contact['last_name']; // required
    $email_from = $contact['email']; // required
    $telephone = $contact['phone']; // not required
	$address = $contact['address'];
	$state = $contact['state'];
	$website = $contact['website'];
	$requeriments = $contact['requeriments'];
	$duration = $contact['duration'];
	
    $email_message = "Form details below.\n\n";
 
	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
	$email_message .= "Address: ".clean_string($address)."\n";
	$email_message .= "Atte: ".clean_string($state)."\n";
	$email_message .= "Website: ".clean_string($website)."\n";
	$email_message .= "Requeriments: ".clean_string($requeriments)."\n";
	$email_message .= "Duration: ".clean_string($duration)."\n";

	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers); 
	//wp_mail($email_to, $email_subject, $email_message, $headers);
	//<!-- include your own success html here -->
	echo "Thank you for contacting us. We will be in touch with you very soon.";
	$result .= 'ok';
}
header( "refresh:5; url=http://www.rmtechservices.com/contact-us/" ); 

?>