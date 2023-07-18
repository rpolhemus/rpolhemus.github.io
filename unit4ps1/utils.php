<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Utils</title>
    </head>
    <body>
        <?php
            function displayHours($arg_hours) {
                $hours_str = "";
                foreach($arg_hours as $day => $daily_hours) {
                    $hours_str = $hours_str . "$day: $daily_hours<br>";
                }
                return $hours_str;
            }
        ?>
    </body>
</html>