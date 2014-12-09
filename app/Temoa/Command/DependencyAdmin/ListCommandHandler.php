<?php namespace Temoa\Command\DependencyAdmin;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use DependencyAdmin;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(DependencyAdmin $model)
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
            'dependency',
        ]);
    }
}
