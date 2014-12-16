<?php namespace Temoa\Command\Course;

class UpdateCommand {

    public $id;

    /**
     * @var string
     */
    public $internal_number;

    /**
     * @var string
     */
    public $external_number;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $partner_id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $format;

    /**
     * @var boolean
     */
    public $visible;

    /**
     * @var boolean
     */
    public $cancelled;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $start_at;

    /**
     * @var array
     */
    public $tags;

    /**
     * @param string  internal_number
     * @param string  external_number
     * @param string  name
     * @param string  category
     * @param int     partner
     * @param string  description
     * @param int     duration
     * @param string  format
     * @param boolean visible
     * @param boolean cancelled
     */
    public function __construct($id, $internal_number, $external_number, $name, $category, $partner_id, $description, $duration, $format, $visible, $cancelled, $image, $start_at, $tags)
    {
        $this->id = $id;
        $this->internal_number = $internal_number;
        $this->external_number = $external_number;
        $this->name = $name;
        $this->category = $category;
        $this->partner_id = $partner_id;
        $this->description = $description;
        $this->duration = $duration;
        $this->format = $format;
        $this->visible = $visible;
        $this->cancelled = $cancelled;
        $this->image = $image;
        $this->start_at = $start_at;
        $this->tags = $tags;
    }
}
