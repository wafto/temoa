<?php namespace Admin;

use Temoa\Dependency\CreateCommand;
use BaseController, View;

class DependenciesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/dependencies
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.dependencies.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/dependencies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.dependencies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/dependencies
	 *
	 * @return Response
	 */
	public function store()
	{
		$dependency = $this->execute(CreateCommand::class);
	}

	/**
	 * Display the specified resource.
	 * GET /admin/dependencies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('admin.dependencies.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/dependencies/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('admin.dependencies.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/dependencies/{id}
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
	 * DELETE /admin/dependencies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}