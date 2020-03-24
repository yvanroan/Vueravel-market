<?php

namespace App\Exceptions;

use \Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use App\Constants\Message;

trait ExceptionTrait
{
    public function apiException($request, $exception){
    	if($exception instanceof ModelNotFoundException){
            return response()->error(Response::HTTP_NOT_FOUND, Message::INCORRECT_REQUEST, null);
        }

        if($exception instanceof NotFoundHttpException){
            return response()->error(Response::HTTP_NOT_FOUND, Message::INCORRECT_REQUEST, null);
        }

        return parent::render($request, $exception);
    }
}
