<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>stripe-test</title>
  <script src="https://js.stripe.com/v2/"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
  </script>
</head>

<body>

  <script type="text/javascript">
    // this identifies your website in the createToken call below
    Stripe.setPublishableKey('pk_test_yDDkdm4SUJ3xMn0veUBLRH6a00zg0gPxaT');

    function processStripeResponse(status, response) {
      var form = $('#payment-form<?php echo $row['
        product_id ']; ?>');

      if (response.error) {
        form.find('.errors').text(response.error.message);
        form.find('button').prop('disabled', false);
      } else {
        var token = response.id;
        form.append($('<input type="hidden" name="stripeToken" />').val(token));
        form.get(0).submit();
      }
    };

    $(function() {
      $('#payment-form<?php echo $row['
        product_id ']; ?>').submit(function(event) {
        var form = $(this);
        form.find('button').prop('disabled', true);

        Stripe.card.createToken(form, processStripeResponse);

        return false;
      });
    });
  </script>


  <form action="charge.php" method="POST" id="payment-form<?php echo $row['product_id']; ?>">
    <input type="hidden" name="ImeiNum" value="0987654321">
    <div>
      <label for="card-number">Card Number</label>
      <input type="text" size="20" data-stripe="number" id="card-number" name="card-number">
    </div>

    <div>
      <label for="cvc">Security Code</label>
      <input type="text" size="4" data-stripe="cvc" id="cvc" name="cvc">
    </div>

    <div>
      <label>Expiration (MM/YYYY)</label>
      <input type="text" data-stripe="exp-month" name="exp-month">
      <span> / </span>
      <input type="text" data-stripe="exp-year" name="exp-year" />
    </div>

    <input type="submit" name="pay" value="Pay">

    <div class="errors"></div>

  </form>
</body>

</html>
