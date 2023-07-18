<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Problem 3</title>
    </head>
    <body>
        <h1>Problem 3</h1>

        <?php

            $hours = array("Monday"=>"9am-4pm", "Tuesday"=>"closed", "Wednesday"=>"9am-4pm", "Thursday"=>"9am-4pm", "Friday"=>"9am-4pm", "Saturday"=>"9am-4pm", "Sunday"=>"11am-4pm");
            $_SESSION["hours"] = $hours;
            
        ?>
        <br><br>
        <a href="unit4ps1_3_2.php">Go to second page</a>
    </body>
</html>