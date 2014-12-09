<?php namespace Temoa\Command\Admin;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use Admin;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(Admin $model)
    {
        $this->model = $model;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return object
     */
    public function handle($command)
    {
        return $this->fetch($command, [
            'user',
        ]);
    }
}