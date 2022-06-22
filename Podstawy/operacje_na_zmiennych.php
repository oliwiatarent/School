<?php
    echo PHP_VERSION, "<br>"; // 7.2.11

    echo 2**10, "<br>"; // 1024

    $x = 10;
    $y = 5;
    echo $x <=> $y, "<br>"; // x większe równe y
    //wynik: 1 - liczba po lewej stronie operatora jest większa, -1 - po prawej, 0 - są równe

    $x = 1;
    $y = 1.0;
    echo gettype($x), "<br>"; // integer
    echo gettype($y), "<br>"; // double

    // równe
    if($x == $y){
        echo "Równe<br>";
    } else {
        echo "Różne<br>";
    }

    // identyczne
    if($x === $y){
        echo "Identyczne<br>";
    } else {
        echo "Nieidentyczne<br>";
    }

    /*
    preinkrementacja ++$i
    postinkrementacja $i++
    predekrementacja --$i
    postdekrementacja $i-- 
    */
    $x = 1;
    echo $x;
    $x = $x++;
    echo $x; // 1
    $x = ++$x;
    echo $x; // 2
    $y = ++$x;
    echo $x; // 3
    echo $y; // 3
    $y = $x++;
    echo $x; // 4
    echo $y; // 3

?>
