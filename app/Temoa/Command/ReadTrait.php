<?php namespace Temoa\Command;

trait ReadTrait {

    protected $model;

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
