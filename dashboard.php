<?php
// templates/dashboard.php

// Include the authentication file to check if the user is logged in
include_once 'core/authentication.php';

// If the user is not logged in, redirect to the login page
if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

include 'templates/header.php';
include 'templates/menu.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- plugin Card example -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card plugin-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Plugin</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">zum Plugin gehen</a></li>
                                    <li><a class="dropdown-item" href="plugins.php">zur Plugin-übersicht</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Pluginbeispieltitel <span>| Plugincreatingdate</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Example</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End plugin Card example -->
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'templates/footer.php'; ?>
