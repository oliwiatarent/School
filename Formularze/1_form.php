<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form method="get">
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <input type="password" name="password" placeholder="Podaj hasło"><br><br>
      <input type="submit" value="Zatwierdź">
    </form>
  <?php
    // echo "<br>".$_GET['surname']."<br>";

    // isset empty
    // if (isset($_GET['surname'])) {
    //   // echo "<br>Nazwisko: $_GET[surname]<br>";
    //   echo "<br>Nazwisko: ".$_GET['surname']."<br>";
    // }

    if (!empty($_GET['surname']) && !empty($_GET['password'])) {
        echo "<br>Nazwisko: ".$_GET['surname'].", Hasło: ".$_GET['password']."<br>";
    }
  ?>
  </body>
</html>
