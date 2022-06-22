<?php
    $name = "Jan";
    $surname = "Nowak";
    echo "Imie i nazwisko: $name $surname<br>";

    // konkatenacja
    echo "Imie: ".$name."<br>Nazwisko: ".$surname."<br>";

    // interpolacja
    echo "Imie: ", $name, "<br>Nazwisko: ", $surname, "<br>";
    echo "Wartość zmiennej \$name: $name<br>";
    echo "Wartość zmiennej \$surname: $surname<br>";

    // boolean
    $a = true;
    $b = false;
    echo gettype($a)."<br>";
    echo "True: $a<br>";
    echo "False: $b<br>";

    // integer
    $dec = 10;
    $bin = 0b1110111;
    $oct = 06325;
    $hex = 0xDA9;
    echo gettype($hex)."<br>";
    echo "$dec<br>";
    echo "$bin<br>";
    echo "$oct<br>";
    echo "$hex<br>";

    // zmiennoprzecinkowe
    $c = 10.5;
    echo gettype($c)."<br>";
    echo "$c<br>";

    //heredoc
    echo <<<TYPY
      Decimal: $dec<br>
      Binary: $bin<br>
    TYPY;

    // wersja php
    echo PHP_VERSION."<br>";

    // potęga
    echo 2**10, "<br>";

    // a większe rowne b
    // 1 = a jest większe
    // -1 = b jest większe
    // 0 = są równe
    $a = 10;
    $b = 5;
    echo $a <=> $b, "<br>";

    // preinkrementacja ++$i
    // postinkrementacja $i++
    // predekrementacja --$i
    // postdekrementacja $i--
    $x = 1;
    $y = 0;
    echo $x++, "<br>"; // 1
    echo ++$x, "<br>"; // 3
    $y = $x++;
    echo $y, "<br>"; // 3
    $y = ++$x;
    echo $y, "<br>"; // 5

    // nl2br
    $text = <<< SCHOOL
        ZSŁ - Zespół
        Szkół Łączności<br>
    SCHOOL;

    echo nl2br($text);

    // mb_strtoupper, mb_strtolower
    $text = "Chrząszcz";
    echo mb_strtoupper($text)."<br>";
    echo mb_strtolower($text)."<br>";

    // ucfirst, ucwords
    $text = "janusz kowalski";
    echo ucfirst($text)."<br>";
    echo ucwords($text)."<br>";

    // wordwrap
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    echo wordwrap($lorem, 50, "<br>")."<br>";

    // ltrim, rtrim, trim
    $name = "   Kasia  ";
    echo strlen($name)."<br>"; // 10
    echo strlen(ltrim($name))."<br>"; // 7
    echo strlen(rtrim($name))."<br>"; // 8
    echo strlen(trim($name))."<br>"; // 5

    // substr
    $name = "Kasia";
    echo substr($name, 0, 3)."<br>"; // Kas

    // str_replace
    $text = "Janusz text Kasia text Karolina text Jakub";
    $rep = "text";
    $replace = "***";
    echo str_replace($rep, $replace, $text)."<br>";

    $text = "Chrząszcz Dębica";
    $tab = ["ą", "ę"];
    $replace = ["a", "e"];
    echo str_replace($tab, $replace, $text)."<br>";

?>
