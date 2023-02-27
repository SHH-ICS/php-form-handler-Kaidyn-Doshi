<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Page Title</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    
  </body>
  
</html>
