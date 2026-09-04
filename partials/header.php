<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $page_title ?? "TEMA" ?></title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="icon" type="image/png" href="img/favicon.png">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body>

        <!-- NAVBAR -->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center"
                    href="index.php">
                    <img src="img/logo-navbar.png" alt="Logo TEMA"
                        class="logo-navbar">
                </a>

                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link"
                                href="index.php#servizi">Servizi</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="portfolio.php">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="contatti.php">Contatti</a></li>
                    </ul>
                </div>
            </div>
        </nav>