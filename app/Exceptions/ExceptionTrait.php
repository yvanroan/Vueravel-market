<?php

namespace App\Exceptions;

use \Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;

trait ExceptionTrait
{
    public function apiException($request, $exception){
    	if($exception instanceof ModelNotFoundException){
             return response()->json([
                'errors' => 'No data found'
            ],Response::HTTP_NOT_FOUND);
        }

        if($exception instanceof NotFoundHttpException){
            return response()->json([
                'errors' => 'Incorrect route'
            ],Response::HTTP_NOT_FOUND);
        }

        return parent::render($request, $exception);
    }
}
