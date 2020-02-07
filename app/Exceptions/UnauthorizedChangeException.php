<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Exception;

class UnauthorizedChangeException extends Exception
{
    public function render(){
    	return response()->json([
                'errors' => 'Unauthorized change'
            ],Response::HTTP_UNAUTHORIZED);
    }
}
