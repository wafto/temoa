<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use Dependency;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(Dependency $model)
    {
        $this->model = $model;
    }
}
