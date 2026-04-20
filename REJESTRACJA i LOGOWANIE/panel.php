<?php
session_start();

// Sprawdzenie czy użytkownik jest zalogowany
if (!isset($_SESSION['login'])) {
    header("Location: log_strona.html"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Użytkownika</title>
    <style>
        /* Stylistyka spójna z ekranem logowania */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 30px;
        }

        /* Stylizacja linku jako przycisku */
        .btn-logout {
            display: inline-block;
            text-decoration: none;
            background-color: #e74c3c; /* Czerwony kolor wylogowania */
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-logout:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Witaj, <?php echo htmlspecialchars($_SESSION['login']); ?>! 👋</h1>
        <p>Zostałeś pomyślnie zalogowany do swojego panelu.</p>
        
        <a href="logout.php" class="btn-logout">Wyloguj się</a>
    </div>

</body>
</html>
