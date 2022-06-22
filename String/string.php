<?php
    $text = <<< SCHOOL
        ZSŁ - Zespół
        Szkół Łączności<br>
SCHOOL;

    echo "$text<br>";
    echo nl2br($text), "<br>";

    $name = "jANusZ";
    echo "$name<br>";
    echo strtolower($name), "<br>";
    echo strtoupper($name), "<br>";

    $surname = "bąk";
    echo strtoupper($surname), "<br>"; // BąK
    echo mb_strtoupper($surname), "<br>"; // BĄK

    $text = "jaNUsz koWAlski";
    echo "<hr>$text<br>";
    echo mb_strtolower($text)."<br>";
    echo ucfirst(mb_strtolower($text))."<br>";
    echo ucwords(mb_strtolower($text))."<br>";

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    echo "$lorem<br>";
    echo wordwrap($lorem, 40, "<br>"), "<br>";
    echo wordwrap($lorem, 40, "<hr>"), "<br>";
    ob_clean();

    $name = "  Jan  ";
    echo "Długość imienia $name wynosi: ".strlen($name)."<br>";
    echo "Długość imienia ".ltrim($name)." wynosi: ".strlen(ltrim($name))."<br>";
    echo "Długość imienia ".rtrim($name)." wynosi: ".strlen(rtrim($name))."<br>";
    echo "Długość imienia ".trim($name)." wynosi: ".strlen(trim($name))."<br>";

    // substr
    $name = "Janusz";
    echo substr($name, 0, 3)."<br>"; // Jan
    echo substr($name, 2, 2)."<br>"; // nu

    // str_replace
    $string = "text";
    $replace = " *** ";
    echo str_replace($string, $replace, "Janusz text Anna text text Poznań")."<br>";

    $tab = ["ą", "ę"];
    $replace = ["a", "e"];
    echo str_replace($tab, $replace, "Bąk")."<br>";

    $mail = "janusz_kowalski@zsl.poznan.pl";
    echo "$mail<br>";
    echo substr($mail, strpos($mail, "@") + 1, 999);
?>
