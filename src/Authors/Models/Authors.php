<?php

namespace Library\Authors\Models;

class Authors
{
    public $id;
    public $first_name;
    public $last_name;

    public function __construct($id, $first_name, $last_name)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name= $last_name;
    }
    
    public function __toString()
    {
        return $this->first_name;
    }

    public function __toArray()
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
        ];
    }
}
