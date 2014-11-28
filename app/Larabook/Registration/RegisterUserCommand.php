<?php
/**
 * Codebase larabook.com
 * Filename: RegisterUserCommand.php
 * User: sid
 * Date: 25/11/2014
 * Time: 12:58 PM
 */

namespace Larabook\Registration;


class RegisterUserCommand {

    public $username;

    public $email;

    public $password;

    function __construct($username, $email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
    }

} 