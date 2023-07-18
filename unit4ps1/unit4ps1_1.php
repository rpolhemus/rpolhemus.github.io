<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>Problem 1</title>
    </head>
    <body>
        <h1>Problem 1</h1>

        <?php
            $n = 0;
            $n = $_GET["n"];

            for ($i = 1; $i <= 12; $i++) {
                $mult = $i * $n;
                echo "$i x $n = $mult<br>";
            }
        ?>
    </body>
</html>