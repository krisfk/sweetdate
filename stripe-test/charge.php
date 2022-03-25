<?php


require_once('./stripe/init.php');

    \Stripe\Stripe::setApiKey('sk_test_g9irmT4kYqGJ7bZi4Z6bw4j100ZM9jPv5o');

    $token = $_POST['stripeToken'];

    $IMEI = $_POST['ImeiNum'];
    // echo $_POST['name'];
    try {
        $charge = \Stripe\Charge::create(array(
          "amount" => 1000,
          "currency" => "usd",
          "source" => $token,
          "description" => $email,
          "metadata" => array("IMEI" => $IMEI))
        );

        print_r($charge);
    }catch(\Stripe\Error\Card $e){
        echo $e->getMessage();
    }


 ?>