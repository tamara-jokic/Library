<?php

namespace Library\Books\Transformers;

use Library\Books\Models\Books;

use Library\Library\Transformers\ObjectTransformer;

class BooksTransformer extends ObjectTransformer
{
    protected $fields = [
        'book_code' => 'int',
        'title' => 'string',
        'edition' => 'string',
        'date_of_issuing' => 'int',
        'availability' => 'int',
    ];

    public function toObject($array)
    {
        return new Books(
            $array['book_code'] ?? 0,
            $array['title'] ?? '',
            $array['edition'] ?? '',
            $array['date_of_issuing'] ?? 0,
            $array['availability'] ?? 0
        );
    }
}