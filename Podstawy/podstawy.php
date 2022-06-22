<?php
    $name = "Janusz";
    echo 'Imie i nazwisko: $name<br>';
    echo "Imie i nazwisko: $name<br>";

    // konkatenacja
    echo "Imię: ".$name."<br>";

    // interpolacja
    echo "Imię: ", $name,"<br>";

    // typy danych:
    // boolean
    $prawda = true;
    $fałsz = false;
    echo $prawda; // 1
    echo $fałsz; // nic nie wyświetli

    //integer
    $dec = 10;
    $bin = 0b1010;
    $oct = 010;
    $hex = 0x10;
    echo "<br>$dec";
    echo "<br>$bin";
    echo "<br>$oct";
    echo "<br>$hex";

    // zmiennoprzecinkowe
    $x = 10.5;
    echo "<br>$x<br>";

    echo gettype($hex); // integer
    echo "<br>";
    echo gettype($prawda); // boolean
    echo "<br>";
    echo gettype($x); // double

    $name = "Anna";
    echo "<br>Nazwa zmiennej \$name, imię: $name";

    // heredoc
    $surname = "Nowak";
    echo <<<ETYKIETA
        <br>
        Imię i nazwisko: $name $surname
        <hr>
ETYKIETA;

?>
