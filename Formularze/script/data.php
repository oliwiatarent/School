<?php
  echo "</h3>Pobrane dane z formularza<br></h3>";
  // print_r($_POST);
  // echo "<br>";

  $error = 0;

  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $error = 1;
    }
  }

  if (!isset($_POST['gender'],$_POST['terms'])) {
    $error = 1;
  }

  if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
  }

  switch ($_POST['gender']) {
    case 'man':
      $gender = "Mężczyzna";
      break;
    case 'woman':
      $gender = "Kobieta";
      break;
    default:
      $gender = "-";
      break;
  }

  echo <<< DATA
    Imie i nazwisko: $_POST[name] $_POST[surname]<br>
    Miasto: $_POST[city]<br>
    Płeć: $gender<br>
DATA;
?>
