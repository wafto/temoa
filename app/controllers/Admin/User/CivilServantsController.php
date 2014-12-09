<?php namespace Admin\User;

use Temoa\Command\CivilServant\ListCommand;

use Temoa\Command\ListingSanitizer;
use BaseController, View, Flash, Redirect, Request;

class CivilServantsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users/civilservants
	 *
	 * @return Response
	 */
	public function index()
	{
		$input = Request::only('sort', 'direction', 'page', 'size', 'search');

		$data = $this->execute(ListCommand::class, $input, [
			ListingSanitizer::class
		]);

		$users = $this->getPaginator($data);

		return View::make('admin.users.civilservants.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/civilservants/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users/civilservants
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/civilservants/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/civilservants/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/civilservants/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/civilservants/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}