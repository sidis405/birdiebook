<?php
/**
 * Codebase larabook.com
 * Filename: FollowUserCommandHandler.php
 * User: sid
 * Date: 27/11/2014
 * Time: 8:16 PM
 */


namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;

class FollowUserCommandHandler implements CommandHandler{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $user =  $this->userRepository->findById($command->userId);

        $this->userRepository->follow($command->userIdToFollow, $user);

        return $user;
    }
}