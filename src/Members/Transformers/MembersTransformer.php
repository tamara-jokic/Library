<?php

namespace Library\Members\Transformers;

use Library\Members\Models\Members;

use Library\Library\Transformers\ObjectTransformer;

class MembersTransformer extends ObjectTransformer
{
    protected $fields = [
        'id' => 'int',
        'jmbg' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'mobile' => 'string',
        'email'=> 'string'
     
    ];

    public function toObject($array)
    {
        return new Members(
            $array['id'] ?? 0,
            $array['jmbg'] ?? '',
            $array['first_name'] ?? '',
            $array['last_name'] ?? '',
            $array['mobile'] ?? '',
            $array['email'] ?? ''
        );
    }
}