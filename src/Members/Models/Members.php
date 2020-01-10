<?php

namespace Library\Members\Models;

class Members
{
    public $id;
    public $jmbg;
    public $first_name;
    public $last_name;
    public $mobile;
    public $email;

    public function __construct($id, $jmbg, $first_name, $last_name, $mobile, $email)
    {
        $this->id = $id;
        $this->jmbg = $jmbg;
        $this->first_name = $first_name;
        $this->last_name= $last_name;
        $this->mobile = $mobile;
        $this->email  = $email;
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
