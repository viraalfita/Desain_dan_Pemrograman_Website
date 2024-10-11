<!DOCTYPE html>
<head>
    <title>Contoh form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form action="proses_lanjut.php" method="post">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="jeruk">Jeruk</option>
            <option value="mangga">Mangga</option>
            <option value="pisang">Pisang</option>
        </select><br>

        <label>Pilih Warna Favorit: </label><br>
        <input type="checkbox" name="warna[]" value="merah">Merah<br>
        <input type="checkbox" name="warna[]" value="biru">Biru<br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau<br>
        <br>

        <label>Pilih Jenis Kelamin: </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan<br>
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

