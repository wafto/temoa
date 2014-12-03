<?php namespace Temoa\Command\Contact;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ReadTrait;
use Contact;

class ReadCommandHandler implements CommandHandler {

    use ReadTrait;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
}
