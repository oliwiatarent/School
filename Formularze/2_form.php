<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form action="./script/data.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
      <select name="city">
        <option value="Poznań">Poznań</option>
        <option value="Gniezno">Gniezno</option>
      </select><br><br>
      <input type="radio" name="gender" value="man">Mężczyzna
      <input type="radio" name="gender" value="woman">Kobieta<br><br>
      <input type="checkbox" name="terms">Regulamin<br><br>
      <input type="submit" value="Zatwierdź"><br><br>
    </form>
  </body>
</html>
