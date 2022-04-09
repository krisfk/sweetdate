<?php


require_once('./stripe/init.php');

    \Stripe\Stripe::setApiKey('sk_test_51Hc7UyK6XoTSXbpZGRS7d11xxvWwPrRlPwyYvMcQ6LSXQVEw5k68nUhs3s7ISeaFd7RPAeM0yDn8adhEmyIS9sO900enLknpWs');

    // $token = $_POST['stripeToken'];

    $IMEI = $_POST['ImeiNum'];
    // echo $_POST['name'];
    try {
        $charge = \Stripe\Charge::create(array(
          "amount" => 1000,
          "currency" => "usd",
        //   "source" => $token,
          "description" => $email,
          "metadata" => array("IMEI" => $IMEI)
        )
        );

        print_r($charge);
        // echo $charge->id;
    }catch(\Stripe\Error\Card $e){
        echo $e->getMessage();
    }


 ?>