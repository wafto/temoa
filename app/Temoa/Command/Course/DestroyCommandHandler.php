<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course;

class DestroyCommandHandler implements CommandHandler {

    protected $model;

    public function __construct(Course $model)
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