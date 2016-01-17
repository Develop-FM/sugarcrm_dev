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
        if (config('crm.debug')) {
            $this->renderWoopsException($e);
        } else {
            $this->renderException($e);
        }
    }

    /**
     * Convert the given exception into a Response instance.
     *
     * @param  \Exception $e
     */
    protected function renderWoopsException(Exception $e)
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->handleException($e);
    }

    /**
     * Convert the given exception into a Response instance.
     *
     * @param  \Exception $e
     */
    protected function renderException(Exception $e)
    {
        (new SymfonyDisplayer(true))->handle($e);
    }
}

