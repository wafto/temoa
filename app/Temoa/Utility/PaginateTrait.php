<?php namespace Temoa\Utility;


trait PaginateTrait {

    public function scopePaginated($query, $size, $page)
    {
        return $query->take($size)->skip($size * ($page - 1));
    }

}
