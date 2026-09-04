<?php
session_start();

// Se l'utente è già loggato → vai all'admin
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: admin/admin.php");
    exit;
}

// Login statico
$USER = "temaadmin";
$PASS = "TEMA2026!";

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'] ?? "";
    $p = $_POST['password'] ?? "";

    if ($u === $USER && $p === $PASS) {
        $_SESSION['logged'] = true;
        header("Location: admin/admin.php");
        exit;
    } else {
        $error = "Credenziali non valide.";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login – Area Riservata</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Premium Login -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <h2 class="login-title">Area Riservata</h2>

        <?php if ($error): ?>
            <div class="login-error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control login-input" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control login-input" required>
            </div>

            <button class="login-btn w-100">Accedi</button>

        </form>

    </div>

</div>

</body>
</html>
