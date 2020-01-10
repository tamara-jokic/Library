<?php

namespace Library\Staff\Transformers;

use Library\Staff\Models\Staff;

use Library\Library\Transformers\ObjectTransformer;

class StaffTransformer extends ObjectTransformer
{
    protected $fields = [
        'id' => 'int',
        'jmbg' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'mobile' => 'string',
        
     
    ];

    public function toObject($array)
    {
        return new Staff(
            $array['id'] ?? 0,
            $array['jmbg'] ?? '',
            $array['first_name'] ?? '',
            $array['last_name'] ?? '',
            $array['mobile'] ?? ''
        );
    }
}