<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course, Category, Tag;

class UpdateCommandHandler implements CommandHandler {

    protected $modelCourse;

    protected $modelCategory;

    protected $modelTag;

    public function __construct(Course $modelCourse, Category $modelCategory, Tag $modelTag)
    {
        $this->modelCourse = $modelCourse;
        $this->modelCategory = $modelCategory;
        $this->modelTag = $modelTag;
    }

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $tags = [];
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
        $instance->modelCourse->image = $command->image;
        $instance->modelCourse->start_date = $command->start_date;
        foreach ($command->tags as $tagName) {
            $tags[] = $this->modelTag->firstOrCreate(['name' => $tagName])->id;
        }
        $this->modelCourse->tags()->sync($tags);
        $instance->save();
        return $instance;
    }
}
