<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "favorite color is". $_SESSION["favcolor"] . ".<br>";
        echo "favorite animal is." . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>