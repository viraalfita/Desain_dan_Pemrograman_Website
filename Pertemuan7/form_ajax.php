<!DOCTYPE html>
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
    <h2>Form Contoh</h2>

    <form id="myForm">
        <label for="name">Name:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <label for="warna">Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah" id="merah">Merah<br>
        <input type="checkbox" name="warna[]" value="biru" id="biru">Biru<br>
        <input type="checkbox" name="warna[]" value="hijau" id="hijau">Hijau<br>
        <br>

        <label for="jk">Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki">Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan" id="perempuan">Perempuan<br>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">

    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault(); // mencegah pengiriman form scr default
                
                // mengumpulkan data form
                var form_data = $(this).serialize();
                
                // kirim ke server php
                $.ajax({
                    url: "proses_lanjut.php",
                    method: "POST",
                    data: form_data,
                    success: function(response) {
                        // tampilkan hasil di div
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>