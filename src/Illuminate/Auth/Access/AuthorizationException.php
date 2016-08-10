<?php

namespace Illuminate\Auth\Access;

use Exception;

class AuthorizationException extends Exception
{
    public function __construct()
    {
        parent::__construct('Unauthorized', 401);
    }
}
