<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('index', ['tasks' => $tasks]);
    }

    public function about()
    {
        $companyName = "Abu Sufian Rubel";
        return view('about', ['companyName' => $companyName]);
    }

    public function contact()
    {
        return view('contact');
    }
}