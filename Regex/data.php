<?php
    $error = "";

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $error = 1;
        }
    }

    if ($error == 1) {
        echo "<script>history.back()</script>";
        exit();
    }

    $regex = "/^[a-zA-Z]{3,16}$/";

    if (preg_match($regex, $_POST["name"]) == 1) {
        echo "Imie: ".$_POST["name"]."<br>";
    } else {
        $error = "Złe imie";
    }

    if (preg_match($regex, $_POST["surname"]) == 1) {
        echo "Nazwisko: ".$_POST["surname"]."<br>";
    } else {
        $error = "Złe nazwisko";
    }

    $regex = "/^[0-9]{2}[.][0-9]{2}[.][0-9]{4}$/";
    
    if (preg_match($regex, $_POST["data"]) == 1) {
        echo "Data urodzenia: ".$_POST["data"]."<br>";
    } else {
        $error = "Zła data urodzenia";
    }

    $regex = "/^[a-z.0-9]+@[a-z]{2,20}.{2,10}$/";

    if (preg_match($regex, $_POST["mail"]) == 1) {
        echo "Adres email: ".$_POST["mail"]."<br>";
    } else {
        $error = "Zły adres email";
    }

    $regex = "/^[0-9]{2}[-][0-9]{3}$/";

    if (preg_match($regex, $_POST["kod"]) == 1) {
        echo "Kod pocztowy: ".$_POST["kod"]."<br>";
    } else {
        $error = "Zły kod pocztowy";
    }

    echo "Błąd: ", $error, "<br>";
?>