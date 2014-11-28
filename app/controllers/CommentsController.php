<?php

use Laracasts\Commander\CommanderTrait;

class CommentsController extends \BaseController {

    use CommanderTrait;

	/**
	 * Leave new comment
	 *
	 * @return Response
	 */
	public function store()
	{
		//fetch the input
        $input = array_add(Input::get(), 'user_id', Auth::id());

        $this->execute('Larabook\Statuses\LeaveCommentOnStatusCommand', $input);

        return Redirect::back();
	}

}
