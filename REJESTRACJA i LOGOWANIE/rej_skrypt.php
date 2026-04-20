<?php
$l = $_POST['login'];
$h = sha1($_POST['password']);

$db = mysqli_connect('localhost', 'root', '', 'keys');

 if (!$db) {
        die("Błąd połączenia: " . mysqli_connect_error());
 }

if (filter_var($l, FILTER_VALIDATE_EMAIL)) {

    $sprawdz = "SELECT login FROM pass WHERE login = '$l'";
    $wynik_sprawdzania = mysqli_query($db, $sprawdz);


    if (mysqli_num_rows($wynik_sprawdzania) > 0) {
        echo "Taki login już istnieje.";
    } else {
    
    $p = "INSERT INTO pass (login, haslo) VALUES ('".$l."', '".$h."')";

    if (mysqli_query($db, $p)) {
        header("Location: index.html");
        exit();
    } else {
        echo "Błąd: " . mysqli_error($db);
    }
    }

} else {
    echo "Błędny format loginu, wpisz email w poprwanym formacie.";
}


mysqli_close($db);
?>
