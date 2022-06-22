<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Sesja 3</h3>
    <?php
      session_start();
      echo session_id();
      echo "<br><br>".$_SESSION['name']."<hr>";
      session_regenerate_id();
      session_destroy();
     ?>
     <a href="./1.php">Pierwsza strona</a>
  </body>
</html>
