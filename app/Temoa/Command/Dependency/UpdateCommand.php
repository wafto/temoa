<?php namespace Temoa\Command\Dependency;

class UpdateCommand {

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $responsable;

    /**
     * @param string id
     * @param string name
     * @param string responsable
     */
    public function __construct($id, $name, $responsable)
    {
        $this->id = $id;
        $this->name = $name;
        $this->responsable = $responsable;
    }

}