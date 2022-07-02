<?php

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
        require "views/contact.view.php";
    }
}