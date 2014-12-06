<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course, Category;

class CreateCommandHandler implements CommandHandler {

    protected $modelCourse;

    protected $modelCategory;

    public function __construct(Course $modelCourse, Category $modelCategory)
    {
        $this->modelCourse = $modelCourse;
        $this->modelCategory = $modelCategory;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $category = $this->modelCategory->where('name', $command->category)->first();
        $this->modelCourse->internal_number = $command->internal_number;
        $this->modelCourse->external_number = $command->external_number;
        $this->modelCourse->name = $command->name;
        $this->modelCourse->category_id = $category->id;
        $this->modelCourse->partner_id = $command->partner_id;
        $this->modelCourse->description = $command->description;
        $this->modelCourse->duration = $command->duration;
        $this->modelCourse->format = $command->format;
        $this->modelCourse->visible = !empty($command->visible) && intval($command->visible) == '1';
        $this->modelCourse->cancelled = !empty($command->cancelled) && intval($command->cancelled) == '1';
        $this->modelCourse->save();
        return $this->modelCourse;
    }

}