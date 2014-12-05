<?php namespace Admin;

use Temoa\Command\Course\ListCommand;

use Temoa\Command\ListingSanitizer;
use BaseController, View, Flash, Redirect, Request;

class CoursesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/courses
	 *
	 * @return Response
	 */
	public function index()
	{
		$input = Request::only('sort', 'direction', 'page', 'size', 'search');

		$data = $this->execute(ListCommand::class, $input, [
			ListingSanitizer::class
		]);

		$courses = $this->getPaginator($data);

		return View::make('admin.courses.index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/courses/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/courses
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /admin/courses/{id}
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
	 * GET /admin/courses/{id}/edit
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
	 * PUT /admin/courses/{id}
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
	 * DELETE /admin/courses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}