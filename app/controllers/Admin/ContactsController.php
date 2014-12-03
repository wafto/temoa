<?php namespace Admin;

use Temoa\Command\Contact\ListCommand;
use Temoa\Command\Contact\ReadCommand;

use Temoa\Command\ListingSanitizer;
use BaseController, View, Flash, Redirect, Request;

class ContactsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/contacts
	 *
	 * @return Response
	 */
	public function index()
	{
		$input = Request::only('sort', 'direction', 'page', 'size', 'search');

		$data = $this->execute(ListCommand::class, $input, [
			ListingSanitizer::class
		]);

		$contacts = $this->getPaginator($data);

		return View::make('admin.contacts.index', compact('contacts'));
	}

	/**
	 * Display the specified resource.
	 * GET /admin/contacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contact = $this->execute(ReadCommand::class, compact('id'));

		return View::make('admin.contacts.show', compact('contact'));
	}
}
