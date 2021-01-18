<?php
require __DIR__ . '/vendor/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


if(isset($_POST['telephone']) && isset($_POST['text'])) {
	$text  = $_POST['text'];									
	$telephone = $_POST['telephone'];

	$sid = '';
	$token = '';
	$client = new Client($sid, $token);
	
	// Use the client to do fun stuff like send text messages!
	$message = $client->messages->create(
	$telephone,
		[
			// A Twilio phone number you purchased at twilio.com/console
			'from' => '+',
			// the body of the text message you'd like to send
			'body' => $text
		]
	);
}			 										
?>