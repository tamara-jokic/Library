<?php

namespace Library\Publishers\Models;

class Publishers
{
    public $id;
    public $name;
    public $location;

    public function __construct($id, $name, $location)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location= $location;
    }
    
    public function __toString()
    {
        return $this->name;
    }

    public function __toArray()
    {
        return [
            'name' => $this->name,
            'location' => $this->location
        ];
    }
}
