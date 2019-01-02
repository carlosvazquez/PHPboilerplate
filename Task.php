<?php

class Task
{
    public $description;
    public $completed;
    
    public function __construct($description, $completed)
    {
        $this->description = $description;
        $this->completed = $completed;
    }
}