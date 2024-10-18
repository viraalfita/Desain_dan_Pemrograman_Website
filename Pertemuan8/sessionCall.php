<?php
    session_start();
?>

<html>
    <body>
        <?php
            echo "Favourite Color: " . $_SESSION['favcolor'] . "<br>";
            echo "Favourite Animal: " . $_SESSION['favanimal'] . "<br>";
        ?>
    </body>
</html>