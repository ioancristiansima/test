<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script src="index.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("YEG9ZSqkZ7GDnqk4J");
      })();
    </script>
     <script src="https://www.google.com/recaptcha/api.js"></script>
     <script>
      function onSubmit(token) {
        document.getElementById("#submitbtn").submit();
      }
    </script>
      </head>
  <body>
    <div class="container border mt-3 bg-light">
      <div class="row">
        <div class="col-md-6 p-5 bg-primary text-white">
          <h1>Hi there!</h1>
          <h4>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo,
          </h4>
        </div>
        <div class="col-md-6 border-left py-3">
          <form id="myform" method="post" action="">
          <h1>Contact form</h1>
          <div class="form-group">
            <h5 for="name">Name</h5>
            <input
              type="text"
              class="form-control"
              id="name"
              minlength="3"
              placeholder="Enter name"
            />

          </div>
          <div class="form-group">
            <h5 for="email">Email</h5>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Enter email"
            />
          </div>
          <script>
                 </script>
          <div class="form-group">
            <h5 for="message">Message</h5>
            <textarea class="form-control" id="message" minlength="3" rows="3"></textarea>
          </div>
          <button class="btn btn-info" id="submitbtn" data-sitekey="reCAPTCHA_6LeJTNciAAAAAEbVedqMXzg9i0LhqUg6HWxfMgZv" data-callback='onSubmit' data-action='submit' onclick="sendMail()">Send mail</button>
        </div>
      </div>
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    field: {
      required: true,
      email: true
    }
  }
});
</script>
  

  </body>
</html>


