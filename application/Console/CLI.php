<?php

namespace App\Console;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\ConsoleOutput;

class CLI
{
    /**
     * @var Symfony\Component\Console\Output\ConsoleOutput
     */
    public static $output;

    /**
     * @param string $key
     * @param string $value
     * @param int    $strlen
     */
    public static function write_param($key, $value = '', $strlen = 20, $whitespace = '.')
    {
        static::write($key . ':' . str_repeat($whitespace, $strlen - strlen($key)) . $value);
    }

    /**
     * Outputs a string to the cli. If you send an array it will implode them
     * with a line break.
     *
     * @param string|array $text the text to output, or array of lines
     * @param bool         $newline
     */
    public static function write($text = '', $newline = false)
    {
        if (is_array($text)) {
            foreach ($text as $line) {
                CLI::write($line);
            }
        } else {
            if (PHP_SAPI == 'cli') {
                static::$output->write($text, $newline);
            } else {
                echo "<h4>$text</h4>";
            }
        }
    }

    /**
     * Outputs a string to the cli. If you send an array it will implode them
     * with a line break.
     *
     * @param string|array $text the text to output, or array of lines
     */
    public static function writeln($text = '')
    {
        static::write($text, true);
    }

    /**
     * Outputs a string to the cli. If you send an array it will implode them
     * with a line break.
     *
     * @param string|array $text the text to output, or array of lines
     */
    public static function write_title($text = '')
    {
        if (is_array($text)) {
            foreach ($text as $line) {
                CLI::writeln('#####################'.str_repeat('#', strlen($line)).'#####################');
                CLI::writeln('#####################'.$line.'#####################');
                CLI::writeln('#####################'.str_repeat('#', strlen($line)).'#####################');
            }
        } else {
            CLI::writeln('#####################'.str_repeat('#', strlen($text)).'#####################');
            CLI::writeln($text);
            CLI::writeln('#####################'.str_repeat('#', strlen($text)).'#####################');
        }
    }

    /**
     * Format input to textual table.
     *
     * @param  array   $headers
     * @param  array|\Illuminate\Contracts\Support\Arrayable  $rows
     * @param  string  $style
     * @return void
     */
    public static function table(array $headers, $rows, $style = 'default')
    {
        $table = new Table(static::$output);
        $table->setHeaders($headers)->setRows($rows)->setStyle($style)->render();
    }
}

CLI::$output = new ConsoleOutput;