<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course, Category;

class UpdateCommandHandler implements CommandHandler {

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
        $instance = $this->modelCourse->findOrFail($command->id);
        $category = $this->modelCategory->where('name', $command->category)->first();
        $instance->internal_number = $command->internal_number;
        $instance->external_number = $command->external_number;
        $instance->name = $command->name;
        $instance->category_id = $category->id;
        $instance->partner_id = $command->partner_id;
        $instance->description = $command->description;
        $instance->duration = $command->duration;
        $instance->format = $command->format;
        $instance->visible = !empty($command->visible) && intval($command->visible) == '1';
        $instance->cancelled = !empty($command->cancelled) && intval($command->cancelled) == '1';
        $instance->save();
        return $instance;
    }

}