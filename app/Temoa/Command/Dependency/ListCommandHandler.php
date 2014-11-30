<?php namespace Temoa\Command\Dependency;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListingTrait;
use Dependency;

class ListCommandHandler implements CommandHandler {

    use ListingTrait;

    public function __construct(Dependency $model)
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
        return $this->fetch($command);
    }

}
