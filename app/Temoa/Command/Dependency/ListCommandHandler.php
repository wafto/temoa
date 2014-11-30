<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Dependency;

class ListCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return Collection
     */
    public function handle($command)
    {
        $dependencies = Dependency::paginated($command->size, $command->page)
            ->sortedBy($command->sort, $command->direction)
            ->get();

        return $dependencies;
    }

}
