<?php
$targetDirectory = "documents/"; // lokasi save

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array(pathinfo($targetFile, PATHINFO_EXTENSION), $allowedExtensions)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File " . $fileName . " berhasil diunggah.<br>";
            } else {
                echo "File " . $fileName . " gagal diunggah.<br>";
            }
        } else {
            echo "File " . $fileName . " tidak valid.<br>";
        }     
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>