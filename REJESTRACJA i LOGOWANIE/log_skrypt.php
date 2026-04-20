<?php

session_start();

$l = $_POST['login'];
$h = sha1($_POST['password']);

$db = mysqli_connect('localhost', 'root', '', 'keys');


if (!$db) {
    die("Błąd połączenia z bazą: " . mysqli_connect_error());
}

if (filter_var($l, FILTER_VALIDATE_EMAIL)) {

$p = "SELECT COUNT(id) AS ilosc FROM pass WHERE login = '".$l."' AND haslo = '".$h."'";


$wynik = mysqli_query($db, $p);


$wiersz = mysqli_fetch_assoc($wynik);


    if ($wiersz['ilosc'] == 1) {
    $_SESSION['login'] = $l;
    header("Location: panel.php");
    exit();
    } else {
    echo "Zły login lub hasło";
    }

} else {
      echo "Błędny format loginu, wpisz email w poprwanym formacie.";
}

mysqli_close($db);

?>