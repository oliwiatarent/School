<html>
    <head>
    </head> 
    <body>
        <?php
            require_once "./connect.php";

            $sql = "SELECT * FROM `user`";
            $result = $connect->query($sql);
            
            // $user = $result->fetch_assoc();
            // print_r($user);

            while ($user = $result->fetch_assoc()) {
                echo <<< USER
                    Imie i nazwisko: $user[name] $user[surname] <br> 
                    Data urodzenia: $user[birthday] <br>  
                    Utworzenie użytkownika: $user[create_user] 
                    <hr>
                USER;
            }
        ?>
    </body>
</html>
