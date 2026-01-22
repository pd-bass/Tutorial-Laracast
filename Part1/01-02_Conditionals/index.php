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
                background: linear-gradient(135deg,white, orange)
            }
        </style>
    </head>
    <body>
        <?php 
                $name = "Dark Matter";
                $read = mt_rand(0, 1) === 1;
                
                $read ? $message="You have read \"$name\"!" : $message="You have not read \"$name\"!";
        ?>
        <h1>
            <!-- <?php echo $message; ?>
            <br> -->
            <!-- shorthand for php echo -->
            <?= $message ?> 
            <br>
        </h1>
        
    </body>
</html>