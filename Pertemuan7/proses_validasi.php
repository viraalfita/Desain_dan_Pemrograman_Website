<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    if (empty($nama)) {
        $errors[] = "Nama tidak boleh kosong";
    }
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid";
    }
    if (empty($password)) {
        $errors[] = "Password tidak boleh kosong";
    } elseif (strlen($password) < 8){
        $errors[] = "Password minimal 8 karakter";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = " . $nama . ", Email = " . $email;
    }
}   
?>