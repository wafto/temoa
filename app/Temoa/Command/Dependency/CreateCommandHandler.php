<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Dependency;

class CreateCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return Dependency
     */
    public function handle($command)
    {
        $dependency = new Dependency();
        $dependency->name = $command->name;
        $dependency->responsable = $command->responsable;
        $dependency->save();
        return $dependency;
    }

}