<?php namespace Temoa\Command\CivilServant;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use CivilServant;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(CivilServant $model)
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
            'interesedCategories',
            'academicTrainings',
            'careerPaths',
            'dependency',
            'desiredCourses',
            'recommendedCourses',
            'takenCourses',
            'user',
        ]);
    }
}
