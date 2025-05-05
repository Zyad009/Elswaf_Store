<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */


    public function register(): void
    {
        $this->renderable(function (Throwable $exception, $request) {
            if (
                $exception instanceof ModelNotFoundException ||
                $exception instanceof NotFoundHttpException
            ) {
                if (auth()->guard('admin')->check()) {
                    return response()->view('errors.web-404', [], 404);
                } elseif (auth()->guard('web')->check()) {
                    return response()->view('errors.web-404', [], 404);
                } elseif (auth()->guard('saleOfficer')->check()) {
                    return response()->view('errors.dash-404', [], 404);
                } elseif (auth()->guard('customerService')->check()) {
                    return response()->view('errors.dash-404', [], 404);
                } else {
                    return response()->view('errors.web-404', [], 404);
                }
            }
        });
        // $this->renderable(function (Throwable $exception, $request) {
        //     if ($exception instanceof ModelNotFoundException || $exception instanceof NotFoundHttpException) {
        //         return abortCustom404();
        //     }
        // });

        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
