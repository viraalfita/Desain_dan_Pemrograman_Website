<!DOCTYPE html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <?php
        session_start();
        if ($_SESSION['status'] == "login") {
            echo "Selamat datang " . $_SESSION['username'];
    ?>
        <br><a href="sessionLogout.php">Logout</a>
    <?php
        }
    ?>
</body>
</html>