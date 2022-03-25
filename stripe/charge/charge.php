<?php

require_once( 'stripe/init.php' );


// \Stripe\ Stripe::setApiKey( 'sk_test_71htfQAyC4vV729pc5xhO2VE' );
\Stripe\Stripe::setApiKey('sk_live_jiWOddVyTTOyVrBALJ4rM1Ge');


if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
	$input = file_get_contents( 'php://input' );
	$body = json_decode( $input );
}

if ( json_last_error() !== JSON_ERROR_NONE ) {
	http_response_code( 400 );
	echo json_encode( [ 'error' => 'Invalid request.' ] );
	exit;
}

function calculateOrderAmount( $items ) {
	if ($items == 'OPULENCE'){return 698000;}
	elseif ($items == 'LUX'){return 398000;}
	else {return $items;}
}
try {
	$charge = \Stripe\ Charge::create( [
		"amount" => calculateOrderAmount( $body->charge ) * 100,
		"currency" => "hkd",
		"source" => $body->token
	] );

	echo json_encode( $charge );
} catch ( \Stripe\ Error\ Card $e ) {
	// Handle "hard declines" e.g. insufficient funds, expired card, etc
	// See https://stripe.com/docs/declines/codes for more
	echo json_encode( [ "error" => $e->getMessage() ] );
}