<?php
// templates/menu.php
?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">Übersicht</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="dashboard.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="plugin_overview.php">
                <i class="bi bi-card-list"></i>
                <span>Plugin Übersicht</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="logout.php">
                <i class="bi bi-dash-circle"></i>
                <span>Logout</span>
            </a>
        </li>
        <!-- ======= add a menu ======= -->
        <li class="nav-heading">Plugins</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="*pluginname/index.php*">
                <i class="bi bi-file-earmark"></i>
                <span>Plugin-Example</span>
            </a>
        </li>
        <!-- add a new menu -->
    </ul>

</aside><!-- End Sidebar-->
