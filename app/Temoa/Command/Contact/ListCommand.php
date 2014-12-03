<?php namespace Temoa\Command\Contact;

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
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var array
     */
    public $search;

    /**
     * @param string sort
     * @param string direction
     * @param string page
     * @param string size
     */
    public function __construct($sort, $direction, $page, $size, $search)
    {
        $this->sort = $sort;
        $this->direction = $direction;
        $this->page = $page;
        $this->size = $size;
        $this->search = $search;
    }
}
