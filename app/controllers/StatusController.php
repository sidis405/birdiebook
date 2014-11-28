<?php

use Larabook\Forms\PublishStatusForm;
use Larabook\Statuses\StatusesRepository;


class StatusController extends \BaseController {


    /**
     * @var StatusesRepository
     */
    private $statusesRepository;
    /**
     * @var PublishStatusForm
     */
    private $publishStatusForm;

    public function __construct(PublishStatusForm $publishStatusForm, StatusesRepository $statusesRepository)
    {
        $this->statusesRepository = $statusesRepository;
        $this->publishStatusForm = $publishStatusForm;

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//        if( ! Auth::check() ) return Redirect::home();

        $statuses = $this->statusesRepository->getFeedForUser(Auth::user());

        return View::make('statuses.index', compact('statuses'));
	}


	/**
	 * Save a new status
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = array_add(Input::get(), 'userId', Auth::id());

        $this->publishStatusForm->validate($input);

        $this->execute('Larabook\Statuses\PublishStatusCommand', $input);

        Flash::message('Your status has been updated.');
        return Redirect::back();

	}

}
