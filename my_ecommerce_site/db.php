<?php
$servername = "localhost";
$username = "root"; // nebo tvé uživatelské jméno
$password = "MyS3cur3P@ssw0rd!"; // nebo tvé heslo
$dbname = "first"; // název databáze

// Vytvoření připojení
$conn = new mysqli($servername, $username, $password, $dbname);

// Zkontrolování připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
