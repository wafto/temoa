<?php namespace Temoa\Command\Dependency;

class ReadCommand {

    /**
     * @var string
     */
    public $id;

    /**
     * @param string id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

}