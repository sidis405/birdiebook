<?php
/**
 * Codebase larabook.com
 * Filename: FollowableTrait.php
 * User: sid
 * Date: 27/11/2014
 * Time: 11:09 PM
 */

namespace Larabook\Users;



trait FollowableTrait {

    /**
     * Get the list of users that a current user follows
     *
     * @return mixed
     */
    public function followedUsers()
    {
        return $this->belongsToMany('User', 'follows', 'follower_id', 'followed_id')
            ->withTimestamps();
    }

    /**
     * Get the list of users follow current user
     *
     * @return mixed
     */
    public function followers()
    {
        return $this->belongsToMany('User', 'follows', 'followed_id', 'follower_id')
            ->withTimestamps();
    }

    /**
     * Determine if current user follows another user
     *
     * @param \User $otherUser
     * @return bool
     */
    public function isFollowedBy(\User $otherUser)
    {
        $idsWhoOtherUserFollows = $otherUser->followedUsers()->lists('followed_id');

        return in_array($this->id, $idsWhoOtherUserFollows);
    }

} 