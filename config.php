<?php

return [
        'database' => [
                'driver'   => 'mysql',
                'username' => 'root',
                'password' => '',
                'host'     => 'localhost',
                'dbname'   => 'phpboilerplate',
                'port'     => 5432,
                'charset'  => 'utf8',
                'prefix'   => '',
                'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
        ]
];
