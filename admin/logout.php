<?php
session_start();

// Distrugge la sessione
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Logout – Area Riservata</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Premium Logout -->
    <link rel="stylesheet" href="css/logout.css">

    <!-- Redirect automatico -->
    <meta http-equiv="refresh" content="1.5;url=../login.php">
</head>

<body>

<div class="logout-wrapper">

    <div class="logout-card">
        <h2 class="logout-title">Logout effettuato</h2>
        <p class="logout-text">Verrai reindirizzato alla pagina di login…</p>
    </div>

</div>

</body>
</html>
