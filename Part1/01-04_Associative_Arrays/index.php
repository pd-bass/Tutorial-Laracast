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
            $users = [
                [
                    'id' => 1,
                    'name' => 'Anna Müller',
                    'email' => 'anna.mueller@example.com',
                    'role' => 'student',
                    'instrument' => 'Klavier',
                    'active' => true,
                ],
                [
                    'id' => 2,
                    'name' => 'Ben Schneider',
                    'email' => 'ben.schneider@example.com',
                    'role' => 'teacher',
                    'instrument' => 'Gitarre',
                    'active' => true,
                ],
                [
                    'id' => 3,
                    'name' => 'Clara Weber',
                    'email' => 'clara.weber@example.com',
                    'role' => 'student',
                    'instrument' => 'Violine',
                    'active' => false,
                ],
                [
                    'id' => 4,
                    'name' => 'David Fischer',
                    'email' => 'david.fischer@example.com',
                    'role' => 'teacher',
                    'instrument' => 'Schlagzeug',
                    'active' => true,
                ],
                [
                    'id' => 5,
                    'name' => 'Eva Hoffmann',
                    'email' => 'eva.hoffmann@example.com',
                    'role' => 'student',
                    'instrument' => 'Gesang',
                    'active' => true,
                ],
            ];
        ?>
        <ul >
            <?php foreach ($users as $user) : ?>
                <li> 
                    <?= $user['name'] ?> is a 
                    <?= $user['role'] ?> for
                    <?= $user['instrument'] ?>
                </li>
            <?php endforeach ?>
        </ul>
        
    </body>
</html>