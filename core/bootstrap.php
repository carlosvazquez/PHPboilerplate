<?php

declare(strict_types=1);

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    $path = $path == 'home' ? null : $path;
    header("Location: /{$path}");
}

function sanitizeInput($input)
{
    return strip_tags(trim($input));
}

function dd($val1 = null, $val2 = null, $val3 = null)
{
    echo '<pre>';
    if($val1 !== null) {
        var_dump($val1);
    }
    if($val2 !== null) {
        var_dump($val2);
    }
    if($val3 !== null) {
        var_dump($val3);
    }
    echo '</pre>';
    die();
}
