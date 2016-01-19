<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\ExceptionHandler as SymfonyDisplayer;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [];

    /**
     * Render an exception into a response.
     *
     * @param  \App\Http\Request  $request
     * @param  \Exception  $e
     * @return \App\Http\Response
     */
    public function render($request, Exception $e)
    {
        if (config('app.debug') and config('app.use_woops')) {
            return $this->renderWoopsException($e);
        } else {
            return $this->renderException($e);
        }
    }

    /**
     * Convert the given exception into a Response instance.
     *
     * @param  \Exception $e
     *
     * @return \Illuminate\Http\Response
     */
    protected function renderWoopsException(Exception $e)
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

        return $this->toIlluminateResponse($whoops->handleException($e), $e);
    }

    /**
     * Convert the given exception into a Response instance.
     *
     * @param  \Exception $e
     *
     * @return \Illuminate\Http\Response
     */
    protected function renderException(Exception $e)
    {
        return $this->toIlluminateResponse($this->convertExceptionToResponse($e), $e);
    }
}

