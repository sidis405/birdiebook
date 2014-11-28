<?php
use Larabook\Statuses\Events\CommentWasPublished;
use Laracasts\Commander\Events\EventGenerator;

/**
 * Codebase larabook.com
 * Filename: ${FILE_NAME}
 * User: sid
 * Date: 28/11/2014
 * Time: 12:27 PM
 */


class Comment extends Eloquent{

    use EventGenerator;

    protected $fillable = ['user_id', 'status_id', 'body'];

    /**
     * @return mixed
     */
    public function owner()
    {
        return $this->belongsTo('User', 'user_id');
    }

    /**
     * @param $body
     * @param $status_id
     * @return static
     */
    public static function leave($body, $status_id)
    {
        $comment = new static(compact('status_id', 'body'));

        $comment->raise(new CommentWasPublished($comment));

        return $comment;
    }

}