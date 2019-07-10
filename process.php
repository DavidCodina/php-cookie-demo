
<?php
if ( isset($_GET['set_cookie']) ) {
  $cookie_name       = $_GET['cookie_name'];
  $cookie_value      = $_GET['cookie_value'];
  $cookie_expiration = number_format($_GET['cookie_expiration']);
  setcookie($cookie_name, $cookie_value, time() + $cookie_expiration);
  echo "The <code>$cookie_name</code> cookie has been set to <code>$cookie_value</code>.";
}


if ( isset($_GET['unset_cookie']) ) {
  //If someone has javascript disabled, there is no validation here to check that
  //$_GET['cookie_name'] is not an empty string. That said, if Javascript is turned off,
  //then the fetch request never would've went through in the first place.
  $cookie_name = $_GET['cookie_name'];

  if( !isset($_COOKIE[$cookie_name]) ) {
    echo "<span style=color:rgb(200,0,0);'>Sorry. The <code>$cookie_name</code> cookie does not exist.</span>";
  } else {
    setcookie($cookie_name, "", time() -1);
    echo "The <code>$cookie_name</code> cookie has been unset.";
  }
}
?>
