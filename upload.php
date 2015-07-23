<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload photos for Yearbook 2016</title>
  </head>
  <body>
    <form class="" method="post">
      <input type="text" name="rollnumber" value="" placeholder="Roll Number">
      <input type="submit" name="name" value="">
    </form>
  </body>
</html>
<?php
  session_start();
  if ($_POST['rollnumber']) {
    $_SESSION['rollnumber'] = $_POST['rollnumber'];
    header('Location: basic.html');
  }
 ?>
