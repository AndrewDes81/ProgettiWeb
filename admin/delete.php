<?php
session_start();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $filename = $_POST['file'] ?? null;
    $category = $_POST['category'] ?? null;

    if ($filename) {
        $path = "../img/Portfolio/" . $filename;

        if (file_exists($path)) {
            unlink($path);
        }
    }

    header("Location: admin.php?cat=" . urlencode($category));
    exit;
}

header("Location: admin.php");
exit;
