<?php 
/** 
* This section ensures that Twilio gets a response. 
*/ 
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<Response></Response>'; //Place the desired response (if any) here

/** 
* This section actually sends the email. 
*/ 

/* Your email address */
$to = "shawn@grossmaninteractive.com";
$subject = "Message from {$_REQUEST['From']} at {$_REQUEST['To']}"; 
$message = "You have received a message from {$_REQUEST['From']}. Body: {$_REQUEST['Body']}"; 
$headers = "From: garrett@grossmaninteractive.com"; // Who should it come from?

mail($to, $subject, $message, $headers); 
