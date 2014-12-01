<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Dependency;

class CreateCommandHandler implements CommandHandler {

    protected $model;

    public function __construct(Dependency $model)
    {
        $this->model = $model;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return Dependency
     */
    public function handle($command)
    {
        $this->model->name = $command->name;
        $this->model->responsable = $command->responsable;
        $this->model->save();
        return $this->model;
    }

}