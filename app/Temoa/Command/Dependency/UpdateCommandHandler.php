<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Dependency;

class UpdateCommandHandler implements CommandHandler {

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
        $instance = $this->model->findOrFail($command->id);
        $instance->name = $command->name;
        $instance->responsable = $command->responsable;
        $instance->save();
        return $instance;
    }

}