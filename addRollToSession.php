<?php
  session_start();
  if ($_POST['rollnumber']) {
    $_SESSION['rollnumber'] = $_POST['rollnumber'];
    header('Location: basic.html');
  }
 ?>
