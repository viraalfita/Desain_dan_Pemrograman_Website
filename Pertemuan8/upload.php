<?php
if (isset($_POST['submit'])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES['myfile']['name']);
    $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array('txt', 'pdf', 'doc', 'docx');
    $maxSize = 3 * 1024 * 1024;

    if (in_array($filetype, $allowedExtensions) && $_FILES['myfile']['size'] <= $maxSize) {
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfile)) {
            echo "File berhasil diunggah. <br>";
            // echo "<img src='" . $targetfile . "' width='200' />";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>