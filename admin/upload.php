<?php
$category = $_POST['category'];
$folder = "../img/Portfolio/";

// Estensione del file
$ext = strtolower(pathinfo($_FILES['newfile']['name'], PATHINFO_EXTENSION));

// Trova tutte le foto della categoria
$allFiles = scandir($folder);
$files = [];

foreach ($allFiles as $file) {
    if (stripos($file, $category) !== false) {
        $extCheck = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($extCheck, ['jpg','jpeg','png','gif','webp'])) {
            $files[] = $file;
        }
    }
}

// Se ci sono già 9 foto → blocca
if (count($files) >= 9) {
   header("Location: admin.php?cat=$category&limit=1");
    exit;
}

// Trova il numero successivo
$maxNum = 0;
foreach ($files as $file) {
    $num = intval(preg_replace('/[^0-9]/', '', $file));
    if ($num > $maxNum) $maxNum = $num;
}

$newNum = $maxNum + 1;
$newName = $category . $newNum . "." . $ext;

// Salva il file
move_uploaded_file($_FILES['newfile']['tmp_name'], $folder . $newName);

// Torna all’admin
header("Location: admin.php?cat=" . $category);
exit;
?>
