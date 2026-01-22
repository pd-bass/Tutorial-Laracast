<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo</title>
        <style>
            body {
                display:grid; 
                height: 100vh; 
                place-items: center; 
                font-family: sans-serif; 
                margin: 0;
                background: linear-gradient (135deg,white, orange)
            }
        </style>
    </head>
    <body>
    
        <h1>
            <?php 
                // =========
                // VARIABLES
                // =========

                $greeting = "Greetings";
                $name = "World!";
                echo $greeting . ", " . $name;
                echo "<br>";
                echo "$greeting, $name";
            ?>
        </h1>
        
    </body>
</html>