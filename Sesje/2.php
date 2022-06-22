<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Sesja 2</h3>
    <?php
      session_start();
      echo session_id();
      echo "<br><br>".$_SESSION['name']."<hr>";
      unset($_SESSION['name']);
     ?>
     <a href="./3.php">Trzecia strona</a>
  </body>
</html>
