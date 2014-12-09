<?php namespace Temoa\Command\Partner;

use Laracasts\Commander\CommandHandler;
use Temoa\Command\ListTrait;
use Partner;

class ListCommandHandler implements CommandHandler {

    use ListTrait;

    public function __construct(Partner $model)
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
            'user',
        ]);
    }
}
