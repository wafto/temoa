<?php namespace Admin;

use Temoa\Command\Session\CreateCommand;
use BaseController, View, Flash, Redirect, Request, Auth;

class SessionsController extends BaseController {

    public function create()
    {
        return View::make('admin.sessions.create');
    }

    public function store()
    {
        $input = Request::only('email', 'password');
        $logged = $this->execute(CreateCommand::class, $input);

        if ($logged)
        {
            Flash::success(sprintf('Bienvenido %s, has sido autenticado.', Auth::user()->email));
            return Redirect::intended(action('Admin\CoursesController@index'));
        }

        Flash::error('No ha sido posible autenticarse con las credenciales proporcionadas');
        return Redirect::action('Admin\SessionsController@create')->withInput();
    }

    public function destroy()
    {
        Auth::logout();
        Flash::success('Has cerrado tu session con éxito.');
        return Redirect::action('Admin\SessionsController@create');
    }
}
