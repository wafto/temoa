<?php namespace Temoa\Command;

use Laracasts\Commander\CommandBus;

class ListingSanitizer implements CommandBus {

    public function execute($command)
    {
        $this->setupPagination($command)
            ->setupSize($command)
            ->setupDirection($command)
            ->setupSort($command)
            ->setupSearch($command);
    }

    protected function setupPagination($command)
    {
        if (!$command->page || !is_numeric($command->page) || intval($command->page) < 1) {
            $command->page = 1;
        }
        return $this;
    }

    protected function setupSize($command)
    {
        if (!$command->size || !is_numeric($command->size) || intval($command->size) < 1) {
            $command->size = 24;
        }
        return $this;
    }

    protected function setupDirection($command)
    {
        if (!in_array($command->direction, ['asc', 'desc'])) {
            $command->direction = 'asc';
        }
        return $this;
    }

    protected function setupSort($command)
    {
        if (!$command->sort) {
            $command->sort = 'id';
        }
        return $this;
    }

    protected function setupSearch($command)
    {
        if (!is_array($command->search)) {
            $command->search = [];
        }
        return $this;
    }

}
