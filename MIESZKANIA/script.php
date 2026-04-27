<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mieszkania";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "SELECT * FROM adres WHERE metraz < 100 AND ulica LIKE 'K%' ORDER BY metraz DESC;";
$result = $conn->query($sql);

echo "<style>
    table { border-collapse: collapse; width: 80%; margin: 20px auto; font-family: Arial, sans-serif; }
    th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
    th { background-color: #4CAF50; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
    tr:hover { background-color: #ddd; }
</style>";

echo "<table>";
echo "<tr><th>Id</th><th>Ulica</th><th>Numer klatki</th><th>Numer mieszkania</th><th>Metraż</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_mieszkania"] . "</td>";
        echo "<td>" . $row["ulica"] . "</td>";
        echo "<td>" . $row["nr_klatki"] . "</td>";
        echo "<td>" . $row["nr_mieszkania"] . "</td>";
        echo "<td>" . $row["metraz"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>Brak wyników.</td></tr>";
}

echo "</table>";

$conn->close();
?>
        