<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title data-tid="elements_examples.meta.title">Stripe Elements: Build beautiful, smart checkout flows</title>
  <meta data-tid="elements_examples.meta.description" name="description" content="Build beautiful, smart checkout flows.">

  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon/180x180.png">
  <link rel="icon" href="img/apple-touch-icon/180x180.png">

  <script src="https://js.stripe.com/v3/"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/index.js" data-rel-js></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/base.css" data-rel-css="" />

  <!-- CSS for each example: -->
  <link rel="stylesheet" type="text/css" href="css/example1.css" data-rel-css="" />
</head>
<body>
  <div class="globalContent">
    <main>
    <div class="stripes">
      <div class="stripe s1"></div>
      <div class="stripe s2"></div>
      <div class="stripe s3"></div>
    </div>
    <section class="container-lg">
      <!--Intro-->
      <div class="">
        <h3 data-tid="elements_examples.intro.title" class="common-SuperTitle"></h3>
      </div>

      <!--Example 1-->
      <div class="cell example example1" id="example-1">
        <form action="#" method="post" id="payment-form">
          <fieldset>
            <div class="row">
              <label for="example1-name" data-tid="elements_examples.form.price_label">price</label>
               <input type="number"  pattern="[0-9]+([\.,][0-9]+)?" step="0.01" class="field"  name="amount"  value="" placeholder="currency is QAR" required>
            </div>
            <div class="row">
              <label for="example1-name" data-tid="elements_examples.form.name_label">Name</label>
              <input id="example1-name" data-tid="elements_examples.form.name_placeholder" type="text" placeholder="Jane Doe" required="" name="name" autocomplete="name">
            </div>
            <div class="row">
              <label for="example1-phone" data-tid="elements_examples.form.phone_label">Phone</label>
              <input id="phone_mask" type="tel" placeholder="(941) 555-0123" name="phone" value="" autocomplete="tel" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="row">
              <div id="example1-card"></div>
            </div>
          </fieldset>
          <button type="submit" data-tid="elements_examples.form.pay_button">Pay $25</button>
          <div class="error" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
              <path class="base" fill="#000" d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z"></path>
              <path class="glyph" fill="#FFF" d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z"></path>
            </svg>
            <span class="message"></span>
          </div>
          <div id="card-errors" role="alert"></div>
        </form>
        <div class="success">
          <div class="icon">
            <svg width="84px" height="84px" viewBox="0 0 84 84" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle class="border" cx="42" cy="42" r="40" stroke-linecap="round" stroke-width="4" stroke="#000" fill="none"></circle>
              <path class="checkmark" stroke-linecap="round" stroke-linejoin="round" d="M23.375 42.5488281 36.8840688 56.0578969 64.891932 28.0500338" stroke-width="4" stroke="#000" fill="none"></path>
            </svg>
          </div>
          <h3 class="title" data-tid="elements_examples.success.title">Payment successful</h3>
          <p class="message"><span data-tid="elements_examples.success.message">Thanks for charge.</span></p>
          <a class="reset" href="#">
            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill="#000000" d="M15,7.05492878 C10.5000495,7.55237307 7,11.3674463 7,16 C7,20.9705627 11.0294373,25 16,25 C20.9705627,25 25,20.9705627 25,16 C25,15.3627484 24.4834055,14.8461538 23.8461538,14.8461538 C23.2089022,14.8461538 22.6923077,15.3627484 22.6923077,16 C22.6923077,19.6960595 19.6960595,22.6923077 16,22.6923077 C12.3039405,22.6923077 9.30769231,19.6960595 9.30769231,16 C9.30769231,12.3039405 12.3039405,9.30769231 16,9.30769231 L16,12.0841673 C16,12.1800431 16.0275652,12.2738974 16.0794108,12.354546 C16.2287368,12.5868311 16.5380938,12.6540826 16.7703788,12.5047565 L22.3457501,8.92058924 L22.3457501,8.92058924 C22.4060014,8.88185624 22.4572275,8.83063012 22.4959605,8.7703788 C22.6452866,8.53809377 22.5780351,8.22873685 22.3457501,8.07941076 L22.3457501,8.07941076 L16.7703788,4.49524351 C16.6897301,4.44339794 16.5958758,4.41583275 16.5,4.41583275 C16.2238576,4.41583275 16,4.63969037 16,4.91583275 L16,7 L15,7 L15,7.05492878 Z M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z"></path>
            </svg>
          </a>
        </div>  
      </div>
    </section>
    
    </main>
  </div>

  
  <!-- Scripts for each example: -->
  <script src="js/payment.js" data-rel-js></script>
  <script>
      document.getElementById('phone_mask').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
  </script>

</body>
</html>
