<?php
session_start();


/* ------------------------------
   TIMEOUT SESSIONE (30 minuti)
--------------------------------*/
$timeout = 1800; // 30 minuti

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout)) {
    session_unset();
    session_destroy();
    header("Location: ../login.php");
    exit;
}

$_SESSION['LAST_ACTIVITY'] = time();

/* ------------------------------
   PROTEZIONE AREA ADMIN
--------------------------------*/
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: ../login.php");
    exit;
}

$page_title = $page_title ?? "Admin – Gestione Foto";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title ?></title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Premium Admin -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="icon" type="../image/png" href="img/favicon.png">
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>

<body>

<nav class="navbar navbar-dark bg-dark shadow-sm px-3" style="height:70px;">
    <div class="d-flex align-items-center">

        <!-- LOGO -->
        <img src="../img/logo-navbar.png" alt="TEMA" style="height:42px;" class="me-3">

        <!-- TITOLO PANNELLO -->
        <div class="d-flex flex-column">
            <span class="navbar-brand mb-0 h1">TEMA – Admin Panel</span>
            <small class="text-secondary" style="font-size:12px;">
                Gestione Portfolio / Foto / Contenuti
            </small>
        </div>
    </div>

    <!-- LOGOUT -->
    <div class="ms-auto">
        <a href="../admin/logout.php" class="btn btn-outline-light btn-sm d-flex align-items-center">
            <i class="bi bi-box-arrow-right me-1"></i> Logout
        </a>
    </div>
</nav>
