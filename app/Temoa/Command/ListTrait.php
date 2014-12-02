<?php namespace Temoa\Command;

trait ListTrait {

    protected $model;

    private $builder;

    private $result = [];

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
        foreach ($search as $column => $data)
        {
            if (is_array($data))
            {
                $this->searchFilter($column, $data);
            }
            else
            {
                // do something with bad input search
            }
        }
        return $this;
    }

    protected function prepareFilterName($name)
    {
        return sprintf('filter%s', ucfirst(strtolower($name)));
    }

    protected function callFilter($operator, $column, $value)
    {
        $method = $this->prepareFilterName($operator);
        if (is_callable([$this, $method]))
        {
            $this->$method($column, $value);
        }
        else
        {
            // do something with not found filters
        }
    }

    protected function searchFilter($column, array $data)
    {
        foreach ($data as $operator => $value)
        {
            $this->callFilter($operator, $column, $value);
        }
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

    protected function filterGt($column, $value)
    {
        $this->builder->where($column, '>', $value);
        return $this;
    }

    protected function filterGte($column, $value)
    {
        $this->builder->where($column, '>=', $value);
        return $this;
    }

    protected function filterLt($column, $value)
    {
        $this->builder->where($column, '<', $value);
        return $this;
    }

    protected function filterLte($column, $value)
    {
        $this->builder->where($column, '<=', $value);
        return $this;
    }

    protected function filterNe($column, $value)
    {
        $this->builder->where($column, '!=', $value);
        return $this;
    }

    protected function filterEq($column, $value)
    {
        $this->builder->where($column, '=', $value);
        return $this;
    }

    protected function filterLk($column, $value)
    {
        $this->builder->where($column, 'like', '%'.$value.'%');
        return $this;
    }

    protected function filterIn($column, $value)
    {
        $values = explode(',', $value);
        $this->builder->whereIn($column, $values);
        return $this;
    }

    protected function filterNin($column, $value)
    {
        $values = explode(',', $value);
        $this->builder->whereNotIn($column, $values);
        return $this;
    }

    protected function filterBtw($column, $value)
    {
        $values = explode(',', $value);
        $this->builder->whereBetween($column, $values);
        return $this;
    }
}
