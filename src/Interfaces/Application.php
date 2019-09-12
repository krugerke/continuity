<?php
namespace Continuity\Interfaces;

interface Application
{
    /**
     * Register a service provider with the application.
     *
     * @param  string  $provider
     * @return ServiceProvider
     */
    public function register($provider);

    /**
     * Get a service provider instance from the class name.
     *
     * @param  string  $provider
     * @return ServiceProvider
     */
    public function get($provider);

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot();

    /**
     * Terminate the application.
     *
     * @return void
     */
    public function terminate();

    /**
     * Run the application.
     *
     * @return void
     */
    public function run();

}