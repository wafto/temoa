<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Dependency;

class DestroyCommandHandler implements CommandHandler {

    protected $model;

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
        return $this->model->destroy($command->id);
    }

}