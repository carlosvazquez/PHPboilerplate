<?php

declare(strict_types=1);

return [
        'database' => [
                'driver'   => 'mysql',
                'username' => 'root',
                'password' => 'secret',
                'host'     => '127.0.0.1',
                'dbname'   => 'db_name',
                'port'     => 3306,
                'charset'  => 'utf8',
                'prefix'   => '',
                'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
        ]
];
