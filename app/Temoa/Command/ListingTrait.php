<?php namespace Temoa\Command;

trait ListingTrait {

    protected $model;

    private $builder;

    private $result = [];

    protected function fetch($command)
    {
        $this->builder = $this->model->select();

        $this->sort($command->sort, $command->direction)
            ->search($command->search)
            ->setTotal()
            ->paginate($command->page, $command->size)
            ->setItems()
            ->setPage($command->page)
            ->setSize($command->size);

        return (object) $this->result;
    }

    protected function sort($sort, $direction)
    {
        $this->builder->orderBy($sort, $direction);
        return $this;
    }

    protected function search(array $search)
    {
        /* To do */
        return $this;
    }

    protected function setTotal()
    {
        $this->result['total'] = $this->builder->count();
        return $this;
    }

    protected function paginate($page, $size)
    {
        $this->builder->take($size)->skip($size * ($page - 1));
        return $this;
    }

    protected function setItems()
    {
        $this->result['items'] = $this->builder->get();
        return $this;
    }

    protected function setPage($page)
    {
        $this->result['page'] = $page;
        return $this;
    }

    protected function setSize($size)
    {
        $this->result['size'] = $size;
        return $this;
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
