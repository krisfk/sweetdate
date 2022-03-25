<?php


require_once('./stripe/init.php');

    // \Stripe\Stripe::setApiKey('sk_test_71htfQAyC4vV729pc5xhO2VE');
    \Stripe\Stripe::setApiKey('sk_live_jiWOddVyTTOyVrBALJ4rM1Ge');

    $token = $_POST['stripeToken'];
    $charge_price =  $_POST['charge_price'];
    $purchase_item = $_POST['purchase_item'];

    try {
      // echo 123;
        $charge = \Stripe\Charge::create(array(
          "amount" => $charge_price*100,
          "currency" => "hkd",
          "source" => $token
          // "selected_plan"=>'111'
        ));

        $paid = $charge['paid'];
        $transaction_id = $charge['balance_transaction'];
        $amount  = $charge['amount'];
        // $purchase_item = $purchase_item;
        $purchase_datetime=date('Y-m-d H:i:s');

        $json['paid']=$paid;
        $json['transaction_id']=$transaction_id;
        $json['amount']=$amount;
        $json['purchase_item']=$purchase_item;
        $json['purchase_datetime']=$purchase_datetime;
        // echo 999;
        $json['member_id']=$_POST['member_id'];
        $json['member_name']=$_POST['member_name'];
        $json['member_email']= $_POST['member_email'];
        $json['member_phone']=$_POST['member_phone'];

        echo json_encode($json);



    }catch(\Stripe\Error\Card $e){
        echo $e->getMessage();
    }


 ?>
