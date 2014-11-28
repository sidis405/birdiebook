<?php namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;

class LeaveCommentOnStatusCommandHandler implements CommandHandler {

    /**
     * @var StatusesRepository
     */
    private $statusesRepository;

    public function __construct(StatusesRepository $statusesRepository)
    {

        $this->statusesRepository = $statusesRepository;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $comment = $this->statusesRepository->leaveComment($command->user_id, $command->status_id, $command->body);

        return $comment;
    }

}