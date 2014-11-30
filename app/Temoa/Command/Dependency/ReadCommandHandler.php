<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Dependency;

class ReadCommandHandler implements CommandHandler {

    public function __construct(Dependency $model)
    {
        $this->model = $model;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        return $this->model->findOrFail($command->id);
    }

}