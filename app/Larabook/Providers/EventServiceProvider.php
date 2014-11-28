<?php
/**
 * Codebase larabook.com
 * Filename: EventServiceProvider.php
 * User: sid
 * Date: 28/11/2014
 * Time: 10:22 AM
 */

namespace Larabook\Providers;


use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * Register Larabook event listeners.
     *
     * @return void
     */
    public function register()
    {
        $this->app['events']->listen('Larabook.*', 'Larabook\Handlers\EmailNotifier');
    }
}