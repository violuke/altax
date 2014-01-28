<?php
namespace Altax\Foundation;

/**
 * Altax application container
 */
class Container extends \Kohkimakimoto\EArray\EArray
{
    /**
     * Name of the applicaiton.
     */
    const NAME = "Altax";

    /**
     * Version of the application.
     */
    const VERSION = "3.0.0";

    /**
     * Condfiguration file paths to load.
     */
    protected $configFiles = array();

    /**
     * Modules
     */
    protected $modules = array();

    /**
     * Application
     */
    protected $app = null;

    public function getName()
    {
        return self::NAME;
    }

    public function getVersion()
    {
        return self::VERSION;
    }

    public function getConfigFiles()
    {
        return $this->configFiles;
    }

    public function setConfigFiles(array $files)
    {
        $this->configFiles = $files;
    }

    public function setConfigFile($key, $path)
    {
        $this->configFiles[$key] = $path;
    }

    public function getConfigFile($key)
    {
        return isset($this->configFiles[$key]) ? $this->configFiles[$key] : null;
    }

    public function setModules(array $modules)
    {
        $this->modules = $modules;
    }

    public function addModule($name, $module)
    {
        $this->modules[$name] = $module;
    }

    public function getModules()
    {
        return $this->modules;
    }

    public function getModule($name)
    {
        return $this->modules[$name];
    }

    public function setApp($app)
    {
        $this->app = $app;
    }

    public function getApp()
    {
        return $this->app;
    }
}

