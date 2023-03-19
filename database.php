<?php
// config/database.php

// Datenbankverbindungseinstellungen
$servername = "db5012310004.hosting-data.io";
$username = "dbu1331351";
$password = "B.m.22.3015dp22!!";
$dbname = "dbs10355204";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
?>
