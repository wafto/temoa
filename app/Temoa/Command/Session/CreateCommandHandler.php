<?php namespace Temoa\Command\Session;

use Laracasts\Commander\CommandHandler;
use Auth;

class CreateCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        return Auth::attempt([
            'email'    => $command->email,
            'password' => $command->password,
        ]);
    }
}