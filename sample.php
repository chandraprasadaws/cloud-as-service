<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACa81bc3fb0aa1a98ba711b450ddf3859c';
$token = '00dfda81116f36d344c2681e65db383f';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+919686856330',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19142465938',
        // the body of the text message you'd like to send
        'body' => 'Hey Chandra, Your infromation is updated!'
    ]
);