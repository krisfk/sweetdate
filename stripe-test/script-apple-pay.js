// Create a Stripe client.
var stripe = Stripe('pk_test_yDDkdm4SUJ3xMn0veUBLRH6a00zg0gPxaT');
// var stripe = Stripe('pk_live_uh2zoeNdzsPFN9HfmJL9p4Fh004iRpgLWB');


var paymentRequest = stripe.paymentRequest({
  country: 'HK',
  currency: 'hkd',
  total: {
    label: 'Demo total',
    amount: 1099,
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
      alert('1');

      ev.complete('fail');
    } else {
      // Report to the browser that the confirmation was successful, prompting
      // it to close the browser payment method collection interface.
      alert('2');
      ev.complete('success');
      // Let Stripe.js handle the rest of the payment flow.
      stripe.confirmCardPayment(clientSecret).then(function(result) {
        if (result.error) {
          alert('3');
          // The payment failed -- ask your customer for a new payment method.
        } else {
          alert('succeeded');
          // The payment has succeeded.
        }
      });
    }
  });
});
