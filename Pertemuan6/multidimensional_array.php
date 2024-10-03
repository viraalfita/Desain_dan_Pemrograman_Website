<!DOCTYPE html>
<head>
    <title>Multidimensional Array</title>
    <link rel="stylesheet" type="text/css" href="style_multi.css">
</head>
<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
            $movie = array(
                            array("Avengers: Infinity War", 2018, 8.7),
                            array("Joker", 2019, 8.5),
                            array("Avengers: Endgame", 2019, 8.4),
                            array("Spiderman: Homecoming", 2017, 7.8)
                        );
            
            echo "<tr>";
            echo "<td>" . $movie[0][0] . "</td>";
            echo "<td>" . $movie[0][1] . "</td>";
            echo "<td>" . $movie[0][2] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>" . $movie[1][0] . "</td>";
            echo "<td>" . $movie[1][1] . "</td>";
            echo "<td>" . $movie[1][2] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>" . $movie[2][0] . "</td>";
            echo "<td>" . $movie[2][1] . "</td>";
            echo "<td>" . $movie[2][2] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>" . $movie[3][0] . "</td>";
            echo "<td>" . $movie[3][1] . "</td>";
            echo "<td>" . $movie[3][2] . "</td>";
            echo "</tr>";
        ?>
    </table>
</body>
</html>