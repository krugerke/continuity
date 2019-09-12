<?php
namespace Continuity\Application;

use Continuity\Interfaces\Application;

class Kernel extends Container implements Application
{
    protected $config;

    protected $application;

    public function __construct($config = '')
    {
        $this->config = $config;
        $this->application = $this;
    }

    /* Registers an event listener */
    public function register($provider): Kernel
    {

    }

    public function get($provider)
    {
        // TODO: Implement get() method.
    }

    public function boot(): Kernel
    {
        require getcwd().'/config/bootstrap.php';

        return $this;
    }

    public function handle(string $eventname, $callback)
    {
        $this->application->on($eventname, $callback);

        return $this;
    }

    public function run(): Kernel
    {


        return $this;
    }

    public function terminate(): Kernel
    {
        unset($this->application);

        return $this;
    }
}