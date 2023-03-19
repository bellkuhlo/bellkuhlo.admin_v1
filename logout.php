<?php
// logout.php
// Laden der Kern- und Konfigurationsdateien
require_once 'config/settings.php';
require_once 'core/functions.php';
require_once 'core/authentication.php';

// Session starten
session_start();

// Benutzer abmelden
Authentication::logout_user();

// Benutzer zur Login-Seite weiterleiten
header("Location: login.php");
exit;
