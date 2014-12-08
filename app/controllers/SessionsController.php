<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController {

    /**
     * @var SignInForm
     */
    private $signInForm;

    public function __construct(SignInForm $signInForm)
    {
        $this->beforeFilter('guest', ['except' => 'destroy']);
        $this->signInForm = $signInForm;
    }

	/**
	 * Show the form for signing in
	 * GET /login
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
        $formData = Input::only('email', 'password');

        $this->signInForm->validate($formData);

        if( ! Auth::attempt($formData))
        {
            Flash::message('We were unable to log you in. Please check your username/password.');

            return Redirect::back()->withInput();

        }

        Flash::message('Welcome back!');
        return Redirect::intended('/statuses');

	}

    /**
     * Log out a user
     *
     * @return mixed
     */
    public function destroy()
    {
        Auth::logout();

        Flash::message('You have been logged out.');

        return Redirect::home();
    }

}