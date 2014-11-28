<?php
/**
 * Codebase larabook.com
 * Filename: UnfollowUserCommandHandler.php
 * User: sid
 * Date: 27/11/2014
 * Time: 9:30 PM
 */

namespace Larabook\Users;


use Laracasts\Commander\CommandHandler;

class UnfollowUserCommandHandler  implements CommandHandler{
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

        $this->userRepository->unfollow($command->userIdToUnFollow, $user);

        return $user;
    }
} 