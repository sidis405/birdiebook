<?php


class FollowsController extends \BaseController {

	/**
	 * Follow a user
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = array_add(Input::get(), 'userId', Auth::id());

        $this->execute('Larabook\Users\FollowUserCommand', $input);

        Flash::success('You are now following this user');

        return Redirect::back();
	}

    /**
     * Unfollow a user
     *
     * @param $userIdToUnfollow
     * @internal param $userIdToUnfollow
     * @internal param int $id
     * @return Response
     */
	public function destroy($userIdToUnfollow)
	{
        $input = array_add(Input::get(), 'userId', Auth::id());

        $this->execute('Larabook\Users\UnfollowUserCommand', $input);

        Flash::success('You are no longer following this user');

        return Redirect::back();
	}


}
