<?php
/**
 * Codebase larabook.com
 * Filename: UserRepository.php
 * User: sid
 * Date: 25/11/2014
 * Time: 1:17 PM
 */

namespace Larabook\Users;

use User;

class UserRepository {

    /**
     * Persist a user
     *
     * @param User $user
     * @return mixed
     */

    public function save(User $user)
    {
        return $user->save();
    }

    /**
     * Get a paginated list of all users
     *
     * @param int $howMany
     * @return mixed
     */
    public function getPaginated($howMany = 100)
    {
        return User::orderBy('username', 'asc')->simplePaginate($howMany);
//        return User::all();
    }

    /**
     * Return a user by username
     *
     * @param $username
     * @return mixed
     */
    public function findByUserName($username)
    {
        return User::with('statuses')->whereUsername($username)->first();
    }

    /**
     * Find a user by their id
     *
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return User::findOrFail($id);
    }


    /**
     * Follow a user
     *
     * @param $userIdToFollow
     * @param User $user
     * @return mixed
     */
    public function follow($userIdToFollow, User $user)
    {
        return $user->followedUsers()->attach($userIdToFollow);
    }

    /**
     * Unfollow a user
     *
     * @param $userIdToUnFollow
     * @param User $user
     * @return mixed
     */
    public function unfollow($userIdToUnFollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnFollow);
    }

} 