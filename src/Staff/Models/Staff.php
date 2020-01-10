<?php

namespace Library\Staff\Models;

class Staff
{
    public $id;
    public $jmbg;
    public $first_name;
    public $last_name;
    public $mobile;
   

    public function __construct($id, $jmbg, $first_name, $last_name, $mobile)
    {
        $this->id = $id;
        $this->jmbg = $jmbg;
        $this->first_name = $first_name;
        $this->last_name= $last_name;
        $this->mobile = $mobile;
        
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