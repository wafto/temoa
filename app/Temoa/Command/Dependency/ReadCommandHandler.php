<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ReadTrait;
use Dependency;

class ReadCommandHandler implements CommandHandler {

    use ReadTrait;

    public function __construct(Dependency $model)
    {
        $this->model = $model;
    }
}
