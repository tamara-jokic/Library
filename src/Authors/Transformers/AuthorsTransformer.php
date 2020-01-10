<?php

namespace Library\Authors\Transformers;

use Library\Authors\Models\Authors;

use Library\Library\Transformers\ObjectTransformer;

class AuthorsTransformer extends ObjectTransformer
{
    protected $fields = [
        'id' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
     
    ];

    public function toObject($array)
    {
        return new Authors(
            $array['id'] ?? 0,
            $array['first_name'] ?? '',
            $array['last_name'] ?? ''
        );
    }
}