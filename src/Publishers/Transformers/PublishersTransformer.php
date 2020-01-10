<?php

namespace Library\Publishers\Transformers;

use Library\Publishers\Models\Publishers;

use Library\Library\Transformers\ObjectTransformer;

class PublishersTransformer extends ObjectTransformer
{
    protected $fields = [
        'id' => 'int',
        'name' => 'string',
        'location' => 'string',
            
    ];

    public function toObject($array)
    {
        return new Publishers(
            $array['id'] ?? 0,
            $array['name'] ?? '',
            $array['location'] ?? ''  
        );
    }
}