<?php

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('users');

        require view('home',compact('tasks'));
    }
    public function about()
    {
        require view('about');
    }
    public function contact()
    {
        require view('contact');
    }
}

