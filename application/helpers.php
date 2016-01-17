<?php

if (! function_exists('dd')) {
    function dd()
    {
        call_user_func_array('dv', func_get_args());
        die(1);
    }
}

if (! function_exists('dv')) {
    function dv()
    {
        array_map(function ($x) {
            (new \Illuminate\Support\Debug\Dumper())->dump($x);
        }, func_get_args());
    }
}

/******************************************************
 * Sugar Helpers
 ******************************************************/

if (! function_exists('sugar_app')) {
    /**
     * @return SugarApplication
     */
    function sugar_app()
    {
        return app('sugar_app');
    }
}

if (! function_exists('modules_list')) {
    /**
     * @return SugarApplication
     */
    function modules_list()
    {
        return app('sugar_app');
    }
}

/******************************************************
 * Sugar Cache
 ******************************************************/

function sugar_cache_retrieve($key)
{
    return Cache::get($key);
}

function sugar_cache_put($key, $value)
{
    Cache::forever($key, $value);
}

function sugar_cache_clear($key)
{
    Cache::forget($key);
}

function sugar_cache_reset()
{
    Cache::flush();
    sugar_clean_opcodes();
}

function sugar_cache_reset_full()
{
    Cache::flush();
    sugar_clean_opcodes();
}