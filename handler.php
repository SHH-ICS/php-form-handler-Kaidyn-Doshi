<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <title>Handoff</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>
        <?php
    $email = "";
    if ( isset( $_POST['email'] ) ){
      $email = $_POST['email'];
    }
    echo "<h1>Your email is: ".$email."!</h1>\n";
    ?>
    
  </body>
  
</html>