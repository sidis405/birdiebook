<?php
use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

/**
 * Codebase larabook.com
 * Filename: Status.php
 * User: sid
 * Date: 26/11/2014
 * Time: 12:07 PM
 */

class Status extends Eloquent{

    use EventGenerator, PresentableTrait;

    /**
     * Fillable fields for the status model
     * @var array
     */

    protected $fillable = ['body'];

    /**
     * Path to the presenter for a user.
     *
     * @var string
     */

    protected $presenter = 'Larabook\Statuses\StatusPresenter';


    public static function publish($body)
    {
        $status = new static(compact('body'));

        $status->raise(new StatusWasPublished($status));

        return $status;

    }

    /**
     * A status belongs to a user
     *
     * @return mixed
     */

    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * A status has many comments
     *
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany('Comment');
    }

}