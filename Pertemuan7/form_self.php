<html>

<head>
    <title>Form</title>
</head>

<body>
    <h2>Form Input PHP</h2>
    <?php
        // inisialisasi variabel
        $namaErr = "";
        $nama = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            } else {
                $nama = $_POST["nama"];
                echo "Data berhasil disimpan";
            }
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"><br><br>
        <span class="error"> <?php echo $namaErr;?></span><br><br>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>