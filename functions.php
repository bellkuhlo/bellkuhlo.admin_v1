<?php
// core/functions.php

// Redirect-Funktion
function redirect($url)
{
    header('Location: ' . $url);
    exit();
}

// Funktion, um sicherzustellen, dass der Benutzer eingeloggt ist
function ensure_authenticated()
{
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        redirect('login.php');
    }
}

?>
