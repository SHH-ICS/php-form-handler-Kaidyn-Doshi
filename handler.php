<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
?>
<!DOCTYPE html>
<html>
  <head>
        <title>Correct Login page</title>
  </head>
    <body>
        this page is only available to viridianknight7!!!
    </body> 
</html>
