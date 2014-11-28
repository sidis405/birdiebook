<?php

use Larabook\Forms\RegistrationForm;


class RegistrationController extends \BaseController {

    /**
     * @var RegistrationForm
     */
    private $registrationForm;


    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
    }

	/**
	 * Show the form for creating a new user.
	 * GET /register
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

    /**
     * Creating a new user
     *
     * @return string
     */
    public function store()
    {
        $this->registrationForm->validate(Input::all());

        $user = $this->execute('Larabook\Registration\RegisterUserCommand');

        Auth::login($user);

        Flash::overlay('Glad to have you aboard as a member');

        return Redirect::home();
    }


}