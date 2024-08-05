<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('home', compact('tasks'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
