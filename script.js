const set_cookie_form   = document.getElementById("set-cookie-form");
const unset_cookie_form = document.getElementById("unset-cookie-form");
const result_div        = document.getElementById("result-div");


/* =========================================================================
                           Set the Cookie
========================================================================= */


set_cookie_form.addEventListener('submit', (e) => {
  e.preventDefault();

  const elements          = e.target.elements;
  const cookie_name       = elements.cookie_name.value.trim();
  const cookie_value      = elements.cookie_value.value.trim();
  const cookie_expiration = elements.cookie_expiration.value.trim();


  //Some basic validation.
  if ( cookie_name === '' || cookie_value === '' || cookie_expiration === '') {
    result_div.innerHTML = "<h3 style='text-align:center;color:rgb(200,0,0);'>Hey! You forgot to fill out part of the form!</h3>";
    return; //return early
  } else if ( !Number.isInteger(parseInt(cookie_expiration)) ) {
    result_div.innerHTML = "<h3 style='text-align:center;color:rgb(200,0,0);'>Hey! <code>" + cookie_expiration + "</code> is not a number!</h3>";
    return; //return early
  }

  //Construct a query string.
  const query_string = 'process.php?set_cookie=true&cookie_name=' + cookie_name +
                       '&cookie_value='      + cookie_value +
                       '&cookie_expiration=' + cookie_expiration;

  fetch(query_string)
    .then((res)  => res.text())
    .then((data) => {
      result_div.innerHTML = "<h3 style='text-align:center;'>" + data + "</h3>";
    });
});


/* =========================================================================
                           Unset the cookie
========================================================================= */


unset_cookie_form.addEventListener('submit', (e) => {
  e.preventDefault();

  const elements     = e.target.elements;
  const cookie_name  = elements.cookie_name.value.trim();

  //Some basic validation.
  if (cookie_name === '') {
    result_div.innerHTML = "<h3 style='text-align:center;color:rgb(200,0,0);'>You must enter a cookie name to unset.</h3>";
    return; //return early.
  }

  //Construct a query string.
  const query_string = 'process.php?unset_cookie=true&cookie_name=' + cookie_name;

  fetch(query_string)
    .then((res)  => res.text())
    .then((data) => {
      result_div.innerHTML = "<h3 style='text-align:center;'>" + data + "</h3>";
    });
});
