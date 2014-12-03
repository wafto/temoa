<?php namespace Temoa\Command\Contact;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use Contact;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
}
