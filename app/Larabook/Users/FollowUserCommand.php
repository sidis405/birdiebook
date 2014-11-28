<?php
/**
 * Codebase larabook.com
 * Filename: FollowUserCommand.php
 * User: sid
 * Date: 27/11/2014
 * Time: 8:16 PM
 */

namespace Larabook\Users;


class FollowUserCommand {

    public $userId;
    public $userIdToFollow;

    function __construct($userId, $userIdToFollow)
    {
        $this->userId = $userId;
        $this->userIdToFollow = $userIdToFollow;
    }

}