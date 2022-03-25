<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>

  <script src="https://js.stripe.com/v3/"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div id="payment-request-button">
    <!-- A Stripe Element will be inserted here. -->
  </div>

  <!-- <script type="text/javascript" src="script-apple-pay.js"></script> -->
<?php

$ch = curl_init('https://www.zfu.com/stripe-test/charge-apple-pay.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
// $header[] = "X-Auth-Token: ".$_SESSION['tk'];
// curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec ($ch);
// echo
// echo $result['id'];
// curl_close ($ch);
$json = json_decode($result);
// echo $json->client_secret;
// print_r($json);
// echo $result;
// $json = json_decode($result, true);
// echo $json[''];
?>



<script type="text/javascript">

var stripe = Stripe('pk_live_uh2zoeNdzsPFN9HfmJL9p4Fh004iRpgLWB');

// var stripe = Stripe('pk_test_yDDkdm4SUJ3xMn0veUBLRH6a00zg0gPxaT');

var clientSecret = "<?php echo $json->client_secret; ?>";


var paymentRequest = stripe.paymentRequest({
  country: 'HK',
  currency: 'hkd',
  total: {
    label: 'item name',
    amount: 400,
  },
  requestPayerName: true,
  requestPayerEmail: true,
});

var elements = stripe.elements();
var prButton = elements.create('paymentRequestButton', {
  paymentRequest: paymentRequest,
});

// Check the availability of the Payment Request API first.

paymentRequest.canMakePayment().then(function(result) {

  // console.log(result);
  if (result) {
    prButton.mount('#payment-request-button');
  } else {
    document.getElementById('payment-request-button').style.display = 'none';
  }
});

paymentRequest.on('paymentmethod', function(ev) {
  // Confirm the PaymentIntent without handling potential next actions (yet).
  stripe.confirmCardPayment(
    clientSecret,
    {payment_method: ev.paymentMethod.id},
    {handleActions: false}
  ).then(function(confirmResult) {
    if (confirmResult.error) {
      // Report to the browser that the payment failed, prompting it to
      // re-show the payment interface, or show an error message and close
      // the payment interface.
      ev.complete('fail');
    } else {
      // Report to the browser that the confirmation was successful, prompting
      // it to close the browser payment method collection interface.
      ev.complete('success');
      // Let Stripe.js handle the rest of the payment flow.
      stripe.confirmCardPayment(clientSecret).then(function(result) {
        if (result.error) {
          // The payment failed -- ask your customer for a new payment method.
        } else {
          // The payment has succeeded.
        }
      });
    }
  });
});




</script>

</body>

</html>
