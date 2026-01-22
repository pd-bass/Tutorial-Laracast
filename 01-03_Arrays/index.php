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
                $books = [
                    "Do Androids Dream of Electric Sheep?",
                    "The Langoliers",
                    "Project Hail Mary",
                    "Dark Matter"
                ];
            
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
        <ul>
            <!--
            <?php foreach ($books as $book) { ?>
                <li><?= $book ?></li>
            <?php } ?>
            -->
            <!-- cleaner Synax -->
            <?php foreach ($books as $book): ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
            <!-- When appending characters after a filename, use Curly Brackets (and "" of course): -->
            <?php foreach ($books as $book): ?>
                <li><?= "{$book}™" ?></li>
            <?php endforeach; ?> 
        </ul>
        
    </body>
</html>