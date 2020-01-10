<?php

namespace Library\Library\Exceptions;

use Exception;

class DBException extends Exception
{
    public function __construct($message = "DB Error")
    {
        parent::__construct($message, 500, null);
    }
}