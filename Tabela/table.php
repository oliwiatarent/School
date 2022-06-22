<?php
    echo "<br><table>";
    echo "<tr><th>Imie</th><th>Nazwisko</th></tr>";
    echo "<tr><td>Janusz</td><td>Nowak</td></tr>";
    echo "<tr><td>Anna</td><td>Nowak</td></tr>";
    echo "</table><br>";

    //heredoc
    echo <<<TABLE
        <table>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Nazwisko</th>
            </tr>
TABLE;

    for($i = 1; $i <= 5; $i++){ 
        echo <<< ROW
            <tr>
                <td>Imię$i</td>
                <td>Nazwisko$i</td>
                <td>Miasto$i</td>
            </tr>
ROW;
    }

    echo "</table><br>"
?>
