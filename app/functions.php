<?php

function sortBy($action, $column, $body)
{
    if (Request::get('sort') == $column) {
        $direction = Request::get('direction') == 'asc' ? 'desc' : 'asc';
    } else {
        $direction = Request::has('sort') ? 'asc' : 'desc';
    }

    $params = [
        'sort' => $column,
        'direction' => $direction,
        'page' => Request::get('page', 1),
    ];

    if (Request::has('search')) {
        $params['search'] = Request::get('search');
    }

    return link_to_action($action, $body, $params);
}

function forDropdown($collection, $key, $column)
{
    $result = [];
    foreach ($collection as $model)
    {
        $result[$model->$key] = $model->$column;
    }
    return $result;
}

function boolIcon($value)
{
    return $value ? 'glyphicon-ok' : 'glyphicon-remove';
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
