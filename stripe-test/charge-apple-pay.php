<?php


require_once('./stripe/init.php');

// \Stripe\Stripe::setApiKey('sk_live_HzZPKkhCtBGKsX2MOGELL7bS004r3dEbgL');
\Stripe\Stripe::setApiKey('sk_test_g9irmT4kYqGJ7bZi4Z6bw4j100ZM9jPv5o');

// echo 1;

$intent = \Stripe\PaymentIntent::create([
  'amount' => 400,
  'currency' => 'hkd',
  // Verify your integration in this guide by including this parameter
  'metadata' => ['integration_check' => 'accept_a_payment'],
]);

// echo $intent;
// echo $intent->id;
echo json_encode($intent);
// print_r($intent);

//sk_live_HzZPKkhCtBGKsX2MOGELL7bS004r3dEbgL
// echo 111;
// $intent = \Stripe\PaymentIntent::create([
//   'amount' => 1099,
//   'currency' => 'usd',
//   // Verify your integration in this guide by including this parameter
//   'metadata' => ['integration_check' => 'accept_a_payment'],
// ]);

    // $token = $_POST['stripeToken'];
    //
    // $IMEI = $_POST['ImeiNum'];
    // echo $_POST['name'];
    // try {
    //     $charge = \Stripe\Charge::create(array(
    //       "amount" => 1000,
    //       "currency" => "usd",
    //       "source" => $token,
    //       "description" => $email,
    //       "metadata" => array("IMEI" => $IMEI))
    //     );
    //
    //     print_r($charge);
    // }catch(\Stripe\Error\Card $e){
    //     echo $e->getMessage();
    // }


 ?>
