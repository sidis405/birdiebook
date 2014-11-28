<?php
/**
 * Codebase larabook.com
 * Filename: StatusPresenter.php
 * User: sid
 * Date: 26/11/2014
 * Time: 10:23 PM
 */

namespace Larabook\Statuses;


use Laracasts\Presenter\Presenter;

class StatusPresenter extends Presenter{

    /**
     * Display how long it has been since publish date
     *
     * @return mixed
     */
    
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }

} 