<?php

namespace App\Support\Log;

class Writer extends \Illuminate\Log\Writer
{
    /**
     * Log a critical message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function fatal($message, array $context = [])
    {
        return $this->writeLog('critical', $message, $context);
    }

    /**
     * Log a warning message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function warn($message, array $context = [])
    {
        return $this->writeLog('warning', $message, $context);
    }

    /**
     * Log an informational message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function debug($message, array $context = [])
    {
        return $this->writeLog('info', $message, $context);
    }

    /**
     * Log an informational message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function deprecated($message, array $context = [])
    {
        return $this->writeLog('info', $message, $context);
    }
}
