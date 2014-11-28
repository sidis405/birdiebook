<?php
/**
 * Codebase larabook.com
 * Filename: StatusesRepository.php
 * User: sid
 * Date: 26/11/2014
 * Time: 12:45 PM
 */

namespace Larabook\Statuses;

use User;
use Status;
use Comment;
use Log;

class StatusesRepository {

    /**
     * Persist status with user id
     *
     * @param Status $status
     * @param $userId
     * @return mixed
     */
    public function save(Status $status, $userId)
    {

        return User::findOrFail($userId)
            ->statuses()
            ->save($status);
    }

    public function getAll(User $user)
    {
        return $user->statuses()->with('user')->latest()->get();
    }

    /**
     * Get the feed for a user
     *
     * @param User $user
     * @return mixed
     */
    public function getFeedForUser(User $user)
    {
        $userIds = $user->followedUsers()->lists('followed_id');

        $userIds[] = $user->id;

        return Status::with('comments')->whereIn('user_id', $userIds)->latest()->get();

    }

    public function leaveComment($user_id, $status_id, $body)
    {
        $comment = Comment::leave($body, $status_id);

        User::findOrFail($user_id)->comments()->save($comment);

        return $comment;
    }

}
