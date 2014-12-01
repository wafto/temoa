<?php

use Laracasts\Commander\CommanderTrait;
use Paginator;

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

	protected function getPaginator($command)
	{
		$items = [];

	    foreach ($command->items as $item) {
	        $items[] = $item;
	    }

	    return Paginator::make($items, $command->total, $command->size);
	}
}
