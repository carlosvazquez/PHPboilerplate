<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function store()
    {
        $input = sanitizeInput($_POST['name']);

        App::get('database')->insert('users', [
            'name' => $input
        ]);

        return redirect('users');
    }
}
