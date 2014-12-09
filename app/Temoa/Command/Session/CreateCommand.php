<?php namespace Temoa\Command\Session;

class CreateCommand {

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $password;

    /**
     * @param string email
     * @param string password
     */
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

}