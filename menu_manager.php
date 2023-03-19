<?php
// core/menu_manager.php

function getMenuItems() {
    $menuItems = [
        [
            'name' => 'Dashboard',
            'url' => 'dashboard.php',
            'icon' => 'bi bi-grid',
        ],
        [
            'name' => 'Plugin Übersicht',
            'url' => 'plugin_overview.php',
            'icon' => 'bi bi-card-list',
        ],
        [
            'name' => 'Logout',
            'url' => 'logout.php',
            'icon' => 'bi bi-dash-circle',
        ],
    ];

    return $menuItems;
}

function renderMenuItems($menuItems) {
    foreach ($menuItems as $item) {
        echo '<li class="nav-item">';
        echo '<a class="nav-link collapsed" href="' . $item['url'] . '">';
        echo '<i class="' . $item['icon'] . '"></i>';
        echo '<span>' . $item['name'] . '</span>';
        echo '</a>';
        echo '</li>';
    }
}

function renderPluginMenuItems($pluginMenuItems) {
    foreach ($pluginMenuItems as $item) {
        echo '<li class="nav-item">';
        echo '<a class="nav-link collapsed" href="' . $item['url'] . '">';
        echo '<i class="' . $item['icon'] . '"></i>';
        echo '<span>' . $item['name'] . '</span>';
        echo '</a>';
        echo '</li>';
    }
}
