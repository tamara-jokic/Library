<?php

namespace Library\Library\Validators;

use Library\Library\Exceptions\ValidationException;

class RequestValidator
{
    public function validate($rules, $params)
    {
        session_start();
        $errors = [];

        foreach ($rules as $rule => $data) {
            if (is_callable($data)) {
                $result = call_user_func($data, $params);

                if ($result) {
                    $errors[$rule] = call_user_func($data, $params);
                }
            } else if (!array_key_exists($rule, $params) || !$params[$rule]) {
                $errors[$rule] = $data;
            }
        }

        $_SESSION['errors'] = $errors;
        session_write_close();
        return $errors;
    }

    public function validateWithThrow($rules, $params)
    {
        $errors = $this->validate($rules, $params);

        if (!empty($errors)) {
            throw new ValidationException($errors);
        }
    }
}