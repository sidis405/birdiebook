<?php
/**
 * Codebase larabook.com
 * Filename: UserPresenter.php
 * User: sid
 * Date: 26/11/2014
 * Time: 9:35 PM
 */

namespace Larabook\Users;

use User;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter{

    /**
     * Present a link to the user's gravatar
     *
     * @param int $size
     * @return string
     */

    public function gravatar($size = 30)
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s={$size}";
    }

    public function followerCount(User $user)
    {
        $count = $user->followers()->count();
        $plural = str_plural('Follower', $count);

        return "{$count} {$plural}";
    }

    public function statusCount(User $user)
    {
        $count = $user->statuses()->count();
        $plural = str_plural('Status', $count);

        return "{$count} {$plural}";
    }

} 