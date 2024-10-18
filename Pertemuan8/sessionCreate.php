<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION['favcolor'] = "pink";
            $_SESSION['favanimal'] = "bird";
            echo "Session telah dibuat";
        ?>
    </body>
<body>
    
</body>
</html>