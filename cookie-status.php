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
  <main>
    <article>
      <h2>Cookie Status:</h2>

      <ul>
      <?php
      if (! empty($_COOKIE)) {
        foreach($_COOKIE as $key => $value) {
          echo '<li><strong>Cookie:</strong> <code>' .
               $key. '</code>, <strong>Value:</strong> <code>' .
               $value . '</code></li>';
        }
      } else {
        echo '<p>The <code>$_COOKIE</code> array is empty.';
      }
      ?>
      </ul>

      <br><br>
      <div style="margin: 50px auto; text-align:center;">
        <a href="index.php#form-container">Back to index.php</a>
      </div>
    </article>
  </main>
</body>
</html>
