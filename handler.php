<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:index.html'); die();
    }
?>
<!DOCTYPE html>
<html>
  <head>
        <title>Correct Login page</title>
  </head>
    <body>
        <?php echo "this page is only available to viridianknight7!!!"
        ?>
    </body> 
</html>
