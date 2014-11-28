<?php
/**
 * Codebase larabook.com
 * Filename: CommandBus.php
 * User: sid
 * Date: 25/11/2014
 * Time: 1:31 PM
 */

namespace Larabook\Core;


use App;

trait CommandBus {

    /**
     * Execute the command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Fetch the CommandBus
     *
     * @return mixed
     */
    public function getCommandBus()
    {
        return App::make('Laracasts\Commander\CommandBus');
    }

} 