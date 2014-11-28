<?php
/**
 * Codebase larabook.com
 * Filename: UserRegistered.php
 * User: sid
 * Date: 25/11/2014
 * Time: 1:46 PM
 */

namespace Larabook\Registration\Events;


use User;

class UserRegistered {

    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

} 