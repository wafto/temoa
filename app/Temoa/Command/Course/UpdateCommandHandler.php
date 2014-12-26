<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course, Category, Tag, DateTime, Config;

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
        if ($command->image) {
            $extension = $command->image->getClientOriginalExtension();
            $path = sprintf('/uploads/%s', strtolower(str_random(8)));
            $destinationPath = sprintf('%s%s', public_path(), $path);
            $command->image->move($destinationPath, $command->image->getClientOriginalName());
            $instance->image = sprintf('%s%s/%s', Config::get('app.url'), $path, $command->image->getClientOriginalName());
        }
        $category = $this->modelCategory->where('name', $command->category)->first();
        $instance->internal_number = $command->internal_number;
        $instance->external_number = $command->external_number;
        $instance->name = $command->name;
        $instance->category_id = $category->id;
        $instance->partner_id = $command->partner_id;
        $instance->description = $command->description;
        $instance->agenda = $command->agenda;
        $instance->duration = $command->duration;
        $instance->format = $command->format;
        $instance->visible = !empty($command->visible) && intval($command->visible) == '1';
        $instance->cancelled = !empty($command->cancelled) && intval($command->cancelled) == '1';
        $instance->start_at = new DateTime($command->start_at);
        $instance->save();
        foreach ($command->tags as $tagName) {
            $tags[] = $this->modelTag->firstOrCreate(['name' => $tagName])->id;
        }
        $instance->tags()->sync($tags);
        return $instance;
    }
}
