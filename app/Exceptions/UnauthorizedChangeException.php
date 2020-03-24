<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Exception;
use App\Constants\Message;

class UnauthorizedChangeException extends Exception
{
    public function render(){
    	return response()->error(Response::HTTP_UNAUTHORIZED, Message::UNAUTHORIZED, null);
    }
}
