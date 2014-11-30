<?php namespace Temoa\Command\Dependency;

class CreateCommand {

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $responsable;

    /**
     * @param string name
     * @param string responsable
     */
    public function __construct($name, $responsable)
    {
        $this->name = $name;
        $this->responsable = $responsable;
    }

}