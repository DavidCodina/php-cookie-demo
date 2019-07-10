<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> - </title>
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <header>
    <h1>PHP Cookie Demo</h1>
  </header>
  <main>
    <article>
      <h2>Setting and Unsetting Cookies with Forms:</h2>


      <br>
      <h5>Creating a Cookie:</h5>
      <p>This example allows the user to set a cookie name and value by using the form on the left.
      When the form is submitted, it is interrupted by a javascript event listener.
      That listener grabs the values, constructs a query string, and sends it in a a fetch request
      to <code>process.php</code>.
      That way, we avoid the ugliness of the current page reloading.</p>


      <p>Once the cookie has been set by <code>process.php</code> a response message
      is sent back, and gets rendered below the forms.
      We can also check <strong>ALL</strong> values of the <code>$_COOKIE</code> array by navigating to <code>cookie-status.php</code>.</p>


      <br>
      <h5>Deleting a Cookie:</h5>


      <p>To delete/unset/remove a cookie, one can enter the name of the cookie in the form on the right.
      If a user tries to submit an empty string, the javascript validation will catch it, and terminate the
      request before it starts. If a user submits a cookie name that does not exist, <code>process.php</code>
      will respond with a message indicating that the cookie does not exist.
      Otherwise, it will respond with a message indicating that the cookie has been deleted.</p>


      <div id="form-container">
        <form id="set-cookie-form" method="GET">
          <label>Set the name of the cookie:</label>
          <input type="text" name="cookie_name">

          <label>Set the value of the cookie:</label>
          <input type="text" name="cookie_value">

          <label>Set the expiration time (in seconds):</label>
          <input type="text" name="cookie_expiration">

          <div style="text-align:center;">
            <button type="submit" name="set_cookie" value="true">Set Cookie</button>
          </div>
        </form>


        <form id="unset-cookie-form" method="GET">
          <label>Unset the cookie with the following name:</label>
          <input type="text" name="cookie_name">

          <div style="text-align:center;">
            <button type="submit" name="unset_cookie" value="true">Unset Cookie</button>
          </div>
        </form>
      </div>

      <div id="result-div"></div>


      <div style="margin: 50px auto; text-align:center;">
        <a href="cookie-status.php">Go to cookie-status.php</a>
      </div>
    </article>

    <script src="script.js"></script>
  </main>
</body>
</html>
