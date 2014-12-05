<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use Course;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(Course $model)
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
        return $this->fetch($command, ['category']);
    }
}