<?php
// Place this file on the Providers folder of your project
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseServiceProvider extends ServiceProvider
{

    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($status, $message = '', $data = null) {
            $data = [
                'status' => $status,
                'success' => true,
                'message' => $message,
                'data' => $data,
            ];
            return response(json_encode($data))
                ->withHeaders([
                    'Content-Type' => 'application/json'
                ])
                ->setStatusCode($status);
        });

        Response::macro('error', function ($status, $message = '', $data = null) {
            $data = [
                'status' => $status,
                'success' => false,
                'message' => $message,
                'errors' => $data,
            ];
            return response(json_encode($data))
                ->withHeaders([
                    'Content-Type' => 'application/json'
                ])
                ->setStatusCode($status);
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     
    public function boot(ResponseFactory $factory)
    {
        //if it get complicated use Responsable
        $factory->macro('success', function ($message = '', $data = null) use ($factory) {
            $format = [
                'success' => true,
                'message' => $message,
                'data' => json_encode($data),
            ];

            return $factory->make($format);
        });

        $factory->macro('error', function (string $message = '', $errors = []) use ($factory){
            $format = [
                'success' => false, 
                'message' => $message,
                'errors' => json_encode($errors),
            ];

            return $factory->make($format);
        });
    }*/

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
