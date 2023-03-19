<?php
// index.php
// Laden der Kern- und Konfigurationsdateien
require_once 'config/settings.php';
require_once 'core/functions.php';
require_once 'core/authentication.php';
require_once 'core/plugin_manager.php';
require_once 'core/menu_manager.php';

// Session starten und Authentifizierung überprüfen
session_start();
$auth = new Authentication();

// Überprüfen, ob der Benutzer angemeldet ist
if ($auth->isUserLoggedIn()) {
    // Plugin-Manager-Instanz erstellen
    $plugin_manager = new PluginManager();
    $menu_manager = new MenuManager($plugin_manager);

    // Header, Menü, Dashboard und Footer laden
    require_once 'templates/header.php';
    require_once 'templates/menu.php';

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($plugin_manager->isPluginPage($page)) {
            $plugin_manager->loadPluginPage($page);
        } else {
            // Wenn die Seite nicht gefunden wird, laden Sie die Dashboard-Seite
            require_once 'templates/dashboard.php';
        }
    } else {
        // Wenn keine Seite angegeben ist, laden Sie die Dashboard-Seite
        require_once 'templates/dashboard.php';
    }
    require_once 'templates/footer.php';
} else {
    // Wenn der Benutzer nicht angemeldet ist, zeigen Sie die Login-Seite
    require_once 'templates/header.php';
    require_once 'templates/login.php';
    require_once 'templates/footer.php';
}

