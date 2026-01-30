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

$filteredUsers = array_filter($users, function ($item) {
    return $item['id'] > 2;
});

require "index.view.php";
?>