<?php
/**
 * Codebase larabook.com
 * Filename: UnfollowUserCommand.php
 * User: sid
 * Date: 27/11/2014
 * Time: 9:28 PM
 */

namespace Larabook\Users;


class UnfollowUserCommand {


    public $userId;
    public $userIdToUnFollow;

    function __construct($userId, $userIdToUnFollow)
    {
        $this->userId = $userId;
        $this->userIdToUnFollow = $userIdToUnFollow;
    }

} 