<?php

namespace Library\Library\Exceptions;

use Exception;

class ItemNotDeletedException extends Exception 
{
    public function __construct($message = "Item not deleted")
    {
        parent::__construct($message, 404, null );
    }
}