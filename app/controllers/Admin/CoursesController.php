<?php namespace Admin;

use Temoa\Command\Course\ListCommand;
use Temoa\Command\Course\CreateCommand;
use Temoa\Command\Course\ReadCommand;
use Temoa\Command\Course\UpdateCommand;
use Temoa\Command\Course\DestroyCommand;

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
		$input = Request::only('internal_number', 'external_number', 'name', 'category', 'partner_id', 'description', 'duration', 'format', 'visible', 'cancelled', 'image', 'start_at', 'tags', 'agenda');

		$input['tags'] = Request::has('hidden-tags') ? explode(',', Request::get('hidden-tags')) : [];

		$course = $this->execute(CreateCommand::class, $input);

		Flash::success(sprintf('El curso %s fue creada con éxito!', $course->name));

		return Redirect::action('Admin\CoursesController@index');
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
		$course = $this->execute(ReadCommand::class, compact('id'));

		return View::make('admin.courses.show', compact('course'));
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
		$course = $this->execute(ReadCommand::class, compact('id'));

		return View::make('admin.courses.edit', compact('course'));
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
		$input = array_merge(compact('id'), Request::only('internal_number', 'external_number', 'name', 'category', 'partner_id', 'description', 'duration', 'format', 'visible', 'cancelled', 'image', 'start_at', 'tags', 'agenda'));

		$input['tags'] = Request::has('hidden-tags') ? explode(',', Request::get('hidden-tags')) : [];

		$course = $this->execute(UpdateCommand::class, $input);

		Flash::success(sprintf('El curso %s fue editada con éxito!', $course->name));

		return Redirect::action('Admin\CoursesController@index');
	}

	/**
	 * Show the confirmation form for removing a resource
	 * GET /admin/courses/{id}/delete
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		$course = $this->execute(ReadCommand::class, compact('id'));

		return View::make('admin.courses.delete', compact('course'));
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
		$success = $this->execute(DestroyCommand::class, compact('id'));

		if ($success)
		{
			Flash::success('El curso fue eliminada con éxito!');
		}
		else
		{
			Flash::error('No fue posible eliminar el curso');
		}

		return Redirect::action('Admin\CoursesController@index');
	}

}