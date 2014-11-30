<?php namespace Temoa\Command\Dependency;

class ListCommand {

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $size;

    /**
     * @param string sort
     * @param string direction
     * @param string page
     * @param string size
     */
    public function __construct($sort, $direction, $page, $size)
    {
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->size = $size;
    }

}