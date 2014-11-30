<?php namespace Temoa\Utility;


trait SortedByTrait {

    public function scopeSortedBy($query, $sort, $direction)
    {
        return $query->orderBy($sort, $direction);
    }

}
