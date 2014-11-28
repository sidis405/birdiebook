<?php
/**
 * Codebase larabook.com
 * Filename: PublishStatusCommand.php
 * User: sid
 * Date: 26/11/2014
 * Time: 12:32 PM
 */

namespace Larabook\Statuses;

class PublishStatusCommand {

    public $body;
    public $userId;

    function __construct($body, $userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }


} 