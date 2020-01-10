<?php

namespace Library\Library\Exceptions;

use Exception;

class ValidationException extends Exception
{
    protected $errors;

    public function __construct(array $errors = [], $message = "ValidationException")
    {
        parent::__construct($message, 400, null);

        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
