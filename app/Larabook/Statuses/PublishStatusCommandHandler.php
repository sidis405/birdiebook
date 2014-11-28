<?php
/**
 * Codebase larabook.com
 * Filename: PublishStatusCommandHandler.php
 * User: sid
 * Date: 26/11/2014
 * Time: 12:32 PM
 */

namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Status;

class PublishStatusCommandHandler implements CommandHandler{

    use DispatchableTrait;

    /**
     * @var StatusesRepository
     */
    protected $repository;

    public function __construct(StatusesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $status = Status::publish($command->body);

        $this->repository->save($status, $command->userId);

        $this->dispatchEventsFor($status);

        return $status;
    }
}