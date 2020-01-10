<?php

namespace Library\Library\Exceptions;

use Exception;

class ItemNotFoundException extends Exception
{
    public function __construct($message = "Item not found")
    {
        parent:: __construct($message, 404, null);
    }
}