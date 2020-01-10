<?php

namespace Library\Library\Exceptions;

use Exception;

class ItemNotSavedException extends Exception
{
    public function __construct($message = "Item not saved")
    {
        parent::__construct($message, 404, null);
    }
}