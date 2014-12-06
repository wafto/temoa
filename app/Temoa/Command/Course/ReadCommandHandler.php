<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course;

class ReadCommandHandler implements CommandHandler {

    public function __construct(Course $model)
    {
        $this->model = $model;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return Course
     */
    public function handle($command)
    {
        return $this->model->with(['category', 'partner'])->findOrFail($command->id);
    }
}
