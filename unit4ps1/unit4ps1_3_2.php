<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Problem 3, Part 2</title>
    </head>
    <body>
        <h1>Problem 3, Part 2</h1>

        <?php
            include_once("utils.php");
            if (isset($_SESSION["hours"])) {
                echo displayHours($_SESSION["hours"]);
            }
            else {
                echo "No active session; go to <a href='unit4ps1_3.php'>the first page</a>";
            }
        ?>
    </body>
</html>