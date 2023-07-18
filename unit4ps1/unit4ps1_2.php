<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Problem 2</title>
    </head>
    <body>
        <h1>Problem 2</h1>

        <?php
            function displayHours($arg_hours) {
                $hours_str = "";
                foreach($arg_hours as $day => $daily_hours) {
                    $hours_str = $hours_str . "$day: $daily_hours<br>";
                }
                return $hours_str;
            }

            $hours = array("Monday"=>"9am-4pm", "Tuesday"=>"closed", "Wednesday"=>"9am-4pm", "Thursday"=>"9am-4pm", "Friday"=>"9am-4pm", "Saturday"=>"9am-4pm", "Sunday"=>"11am-4pm");

            echo displayHours($hours);
        ?>
    </body>
</html>