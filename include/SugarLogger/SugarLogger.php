<?php

if (! defined('sugarEntry') || ! sugarEntry) {
    die('Not A Valid Entry Point');
}


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * Default SugarCRM Logger
 * @api
 */
class SugarLogger
{
    /**
     * This the the current log level
     *
     * @var string
     */
    private $defaultLevel = Logger::CRITICAL;

    /**
     * The Log levels.
     *
     * @var array
     */
    protected $levels = [
        'deprecated' => Logger::DEBUG,
        'debug'      => Logger::DEBUG,
        'info'       => Logger::INFO,
        'notice'     => Logger::NOTICE,
        'warning'    => Logger::WARNING,
        'warn'       => Logger::WARNING,
        'fatal'      => Logger::CRITICAL,
        'error'      => Logger::ERROR,
        'critical'   => Logger::CRITICAL,
        'alert'      => Logger::ALERT,
        'emergency'  => Logger::EMERGENCY,
        'security'   => Logger::EMERGENCY,
    ];

    /**
     * @var string
     */
    protected $logfile = 'sugarcrm';

    /**
     * @var string
     */
    protected $ext = '.log';

    /**
     * @var string
     */
    protected $dateFormat = '%c';

    /**
     * @var string
     */
    protected $logSize = '10MB';

    /**
     * @var int
     */
    protected $maxLogs = 10;

    /**
     * @var string
     */
    protected $filesuffix = "";

    /**
     * @var string
     */
    protected $date_suffix = "";

    /**
     * @var string
     */
    protected $log_dir = '.';

    /**
     * @var string
     */
    protected $full_log_file;

    /**
     * used for config screen
     *
     * @var array
     */
    public static $filename_suffix = [
        //bug#50265: Added none option for previous version users
        ""         => "None",
        "%m_%Y"    => "Month_Year",
        "%d_%m"    => "Day_Month",
        "%m_%d_%y" => "Month_Day_Year",
    ];

    /**
     * Let's us know if we've initialized the logger file
     *
     * @var bool
     */
    protected $initialized = false;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var SugarConfig
     */
    protected $config;

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->$key;
    }

    /**
     * Used by the diagnostic tools to get SugarLogger log file information
     *
     * @return string
     */
    public function getLogFileNameWithPath()
    {
        return $this->full_log_file;
    }

    /**
     * Used by the diagnostic tools to get SugarLogger log file information
     *
     * @return string
     */
    public function getLogFileName()
    {
        return ltrim($this->full_log_file, "./");
    }

    /**
     * Constructor
     *
     * Reads the config file for logger settings
     *
     * @param string $loggerName
     */
    public function __construct($loggerName)
    {
        $this->config = SugarConfig::getInstance();

        $this->ext        = $this->config->get('logger.file.ext', $this->ext);
        $this->logfile    = $this->config->get('logger.file.name', $this->logfile);
        $this->dateFormat = $this->config->get('logger.file.dateFormat', $this->dateFormat);
        $this->logSize    = $this->config->get('logger.file.maxSize', $this->logSize);
        $this->maxLogs    = $this->config->get('logger.file.maxLogs', $this->maxLogs);
        $this->filesuffix = $this->config->get('logger.file.suffix', $this->filesuffix);
        $log_dir          = $this->config->get('log_dir', $this->log_dir);

        $this->log_dir = $log_dir.(empty($log_dir) ? '' : '/');
        $this->full_log_file = $this->log_dir.$this->logfile.$this->ext;

        if (! empty($level)) {
            $this->defaultLevel = isset($this->levels[$level]) ? $this->levels[$level] : $this->defaultLevel;
        }

        $this->logger = new Logger($loggerName);
        $this->logger->pushHandler(new StreamHandler($this->full_log_file, $this->defaultLevel));
    }

    /**
     * Used by the diagnostic tools to get SugarLogger log file information
     */
    public function getLogFilPath()
    {
        return ltrim($this->full_log_file, "./");
    }

    /**
     * Log an emergency message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function security($message, array $context = [])
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    /**
     * Log an emergency message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function deprecated($message, array $context = [])
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    /**
     * Log an alert message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function alert($message, array $context = [])
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

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
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    /**
     * Log an error message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function error($message, array $context = [])
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
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
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    /**
     * Log a notice to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function notice($message, array $context = [])
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    /**
     * Log an informational message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function info($message, array $context = [])
    {
        return $this->writeLog(Logger::INFO, $message, $context);
    }

    /**
     * Log a debug message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function debug($message, array $context = [])
    {
        return $this->writeLog(Logger::DEBUG, $message, $context);
    }

    /**
     * Log a message to the logs.
     *
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function log($message, array $context = [])
    {
        return $this->info($message, $context);
    }

    /**
     * Dynamically pass log calls into the writer.
     *
     * @param  string $level
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    public function write($level, $message, array $context = [])
    {
        return $this->log($level, $message, $context);
    }

    /**
     * Write a message to Monolog.
     *
     * @param  string $level
     * @param  string $message
     * @param  array  $context
     *
     * @return void
     */
    protected function writeLog($level, $message, $context)
    {
        $level = isset($this->levels[$level]) ? $this->levels[$level] : Logger::INFO;
        $this->logger->addRecord($level, $this->formatMessage($message), $context);
    }

    /**
     * Format the parameters for the logger.
     *
     * @param  mixed $message
     *
     * @return mixed
     */
    protected function formatMessage($message)
    {
        if (is_array($message)) {
            return var_export_helper($message);
        }

        return $message;
    }

    /**
     * Parse the string level into a Monolog constant.
     *
     * @param  string $level
     *
     * @return int
     *
     * @throws \InvalidArgumentException
     */
    protected function parseLevel($level)
    {
        if (isset($this->levels[$level])) {
            return $this->levels[$level];
        }

        throw new InvalidArgumentException('Invalid log level.');
    }
}
