<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListingTrait;
use Dependency;

class ListCommandHandler implements CommandHandler {

    use ListingTrait;

    public function __construct(Dependency $model)
    {
        $this->model = $model;
    }
}
