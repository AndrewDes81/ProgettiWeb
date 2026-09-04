<?php
session_start();

// Sicurezza: solo utenti loggati
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: login.php");
    exit;
}

// File da sostituire
$oldfile = $_POST['oldfile'] ?? null;
$category = $_POST['category'] ?? null;

// Percorso completo del file da sovrascrivere
$target = "../img/Portfolio/" . $oldfile;

// Controllo che il file esista
if (!file_exists($target)) {
    die("Errore: il file da sostituire non esiste.");
}

// Controllo che sia stato caricato un nuovo file
if (!isset($_FILES['newfile']) || $_FILES['newfile']['error'] !== UPLOAD_ERR_OK) {
    die("Errore nel caricamento del nuovo file.");
}

// Sovrascrive il file
if (move_uploaded_file($_FILES['newfile']['tmp_name'], $target)) {
    // Torna alla categoria corretta
    header("Location: admin.php?cat=" . $category);
    exit;
} else {
    die("Errore: impossibile sostituire il file.");
}