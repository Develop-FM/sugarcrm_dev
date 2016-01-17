<?php

namespace App;

use App\Bootstrap\AutoLoader;

class Application extends \Illuminate\Foundation\Application
{
    /**
     * Create a new Illuminate application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        $this->registerAutoloader();
        parent::__construct($basePath);
    }

    protected function registerAutoloader()
    {
        $autoLoader = new AutoLoader($this);
        spl_autoload_register([$autoLoader, 'autoload']);
    }

    /**
     * Get the path to the application "app" directory.
     *
     * @return string
     */
    public function path()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'application';
    }

    /**
     * Get the path to the cached "compiled.php" file.
     *
     * @return string
     */
    public function getCachedCompilePath()
    {
        return $this->storagePath().'/bootstrap/cache/compiled.php';
    }

    /**
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath()
    {
        return $this->storagePath().'/bootstrap/cache/services.php';
    }
}
