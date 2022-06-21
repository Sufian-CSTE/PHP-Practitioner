<?php

// require "function.php";

class Task {

    public $description;

    protected $complete = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isCompleted()
    {
        return $this->$complete;
    }

    public function complete()
    {
        return $this->complete = true;
    }
}

// $task = new Task();

$tasks = [
    new Task('Aliquip aute labore elit quis culpa proident.'),
    new Task('Aliquip nisi ad esse aute labore elit quis culpa proident.'),
    new Task('Aliquip anim occaecat eiusmod'),
];


require "index.view.php";