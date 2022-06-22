<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Figury geometryczne</title>
  </head>
  <body>
    <h3>Figury geometryczne - obliczanie pola</h3>
    <form method="post">
      <input type="radio" name="geometricFigure" value="cube" checked>Sześcian
      <input type="radio" name="geometricFigure" value="rectangle">Prostokąt
      <input type="submit" value="Zatwierdź">
    </form>
    <?php
      if (!empty($_POST['geometricFigure'])) {
        echo "<br>Wypełnij dane<br><br>";
        echo '<form action="./scripts/calculate.php" method="post">';
          switch ($_POST['geometricFigure']) {
            case 'cube':
              echo '<input type="text" name="a" placeholder="Podaj a"><br><br>';
              break;
            case 'rectangle':
              echo '<input type="text" name="a" placeholder="Podaj a"><br><br>';
              echo '<input type="text" name="b" placeholder="Podaj b"><br><br>';
              break;
          }
        echo "<input type=\"hidden\" name=\"geometricFigure\" value=\"$_POST[geometricFigure]\">";
        echo '<input type="submit" value="Zatwierdź"></form>';
      }
     ?>
     </form>
  </body>
</html>
