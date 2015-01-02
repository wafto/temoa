<?php namespace Temoa\Command\Course;

use Laracasts\Commander\CommandHandler;
use Course, Category, Tag, DateTime, Config;

class CreateCommandHandler implements CommandHandler {

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
        if ($command->image) {
            $extension = $command->image->getClientOriginalExtension();
            $path = sprintf('/uploads/%s', strtolower(str_random(8)));
            $destinationPath = sprintf('%s%s', public_path(), $path);
            $command->image->move($destinationPath, $command->image->getClientOriginalName());
            $this->modelCourse->image = sprintf('%s%s/%s', Config::get('app.url'), $path, $command->image->getClientOriginalName());
        }
        $category = $this->modelCategory->where('name', $command->category)->first();
        $this->modelCourse->internal_number = $command->internal_number;
        $this->modelCourse->external_number = $command->external_number;
        $this->modelCourse->name = $command->name;
        $this->modelCourse->category_id = $category->id;
        $this->modelCourse->partner_id = $command->partner_id;
        $this->modelCourse->description = $command->description;
        $this->modelCourse->agenda = $command->agenda;
        $this->modelCourse->duration = $command->duration;
        $this->modelCourse->format = $command->format;
        $this->modelCourse->visible = !empty($command->visible) && intval($command->visible) == '1';
        $this->modelCourse->cancelled = !empty($command->cancelled) && intval($command->cancelled) == '1';
        $this->modelCourse->start_at = new DateTime($command->start_at);
        $this->modelCourse->save();
        foreach ($command->tags as $tagName) {
            $tags[] = $this->modelTag->firstOrCreate(['name' => $tagName])->id;
        }
        $this->modelCourse->tags()->sync($tags);
        return $this->modelCourse;
    }
}
