<?php
/**
 * Codebase larabook.com
 * Filename: StatusWasPublished.php
 * User: sid
 * Date: 26/11/2014
 * Time: 12:32 PM
 */
namespace Larabook\Statuses\Events;

use Status;

class StatusWasPublished {

    public $status;

    function __construct(Status $status)
    {
        $this->status = $status;
    }


}