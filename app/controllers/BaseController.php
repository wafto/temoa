<?php

use Laracasts\Commander\CommanderTrait;
use Temoa\Dependecy\CreateCommand;

class BaseController extends Controller {

	use CommanderTrait;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function ejemplo()
	{
		$this->execute(CreateCommand::class);
	}
}
