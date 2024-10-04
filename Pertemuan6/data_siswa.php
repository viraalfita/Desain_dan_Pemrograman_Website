<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style_siswa.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $(".kotak").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <h2>Data Siswa</h2>
    <button id="flip">Klik untuk menampilkan data</button>
    <div class="kotak">
        <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>

        <?php
            $data_siswa = array(
                                array("Andi", 15, "10 A", "Malang"),
                                array("Siti", 16, "10 B", "Batu"),
                                array("Budi", 15, "10 A", "Dinoyo"),
                                array("Anton", 25, "10 A", "Dinoyo")
            );

            foreach ($data_siswa as $siswa) {
                echo "<tr>";
                echo "<td>" . $siswa[0] . "</td>";
                echo "<td>" . $siswa[1] . "</td>";
                echo "<td>" . $siswa[2] . "</td>";
                echo "<td>" . $siswa[3] . "</td>";
                echo "</tr>";
            }

            $rataRata = array_sum(array_column($data_siswa, 1)) / count($data_siswa);
        ?>
    </table>
    <?php
    echo "Rata-rata umur siswa: " . $rataRata . " tahun";
    ?>
    </div>
</body>
</html>