<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>

  <script src="https://js.stripe.com/v3/"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <form action="charge.php" method="post" id="payment-form">
    <div class="form-row">


      <label for="card-element">
        Credit or debit card
      </label>

      <input id="name" name="name" value="haha" placeholder="Jenny Rosen" required>



      <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
      </div>

      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
  </form>

  <script type="text/javascript" src="script.js"></script>


</body>

</html>
