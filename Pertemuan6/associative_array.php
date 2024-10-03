<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            border-collapse: collapse;
            width: 40%;
            margin-top: 50px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8b400;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php
        $dosen = [
            'nama' => 'Vira Alfita Yunia',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>
    <table>
        <tr>
            <th>Biodata</th>
            <th>Isi</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $dosen['nama']; ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?php echo $dosen['domisili']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
