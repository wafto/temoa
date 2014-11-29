<?php namespace Temoa\Dependency;

use Laracasts\Commander\CommandHandler;

class CreateCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        var_dump($command);
    }

}