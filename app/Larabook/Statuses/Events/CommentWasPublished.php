<?php
/**
 * Codebase larabook.com
 * Filename: CommentWasPublished.php
 * User: sid
 * Date: 28/11/2014
 * Time: 1:55 PM
 */

namespace Larabook\Statuses\Events;

use Comment;

class CommentWasPublished {

    /**
     * @var Comment
     */
    private $comment;

    public function __construct(Comment $comment)
    {

        $this->comment = $comment;
    }

}