<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors;

    public function addError($field, $message)
    {
        $this->errors[$field] = $message;
    }

    public function validate($email, $password)
    {
        $errors = [];
        if(!Validator::email($email)) {
            $this->addError('email', 'Please provide a valid email address.');
        }

        if (!Validator::string($password)) {
            $this->addError('password', 'Please provide a valid password.');
        }

        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}