<?php

namespace App\Events;

class ExampleEvent extends Event
{
    public $forevent;   
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->forevent = $data;
    }
}
