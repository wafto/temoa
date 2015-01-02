<?php namespace Api\V1;

use Temoa\Transformer\TransformerInterface;
use BaseController, Response;

class V1Controller extends BaseController {

    public function paginatedResponseTransformed($data)
    {
        $result = $this->collectionResponseTransformed($data->items);

        return Response::json([
            'total' => $data->total,
            'page' => $data->page,
            'size' => $data->size,
            'items' => $result,
        ]);
    }

    public function collectionResponseTransformed($collection)
    {
        $result = [];
        foreach ($collection as $item) {
            $result[] = $item->transform();
        }
        return $result;
    }

    public function itemResponseTransformed(TransformerInterface $item)
    {
        return Response::json($item->transform());
    }

    public function notFoundResponse($message)
    {
        return Response::json([
            'error' => true,
            'message' => $message,
        ]);
    }

    public function validationFail($message)
    {
        return Response::json([
            'error' => true,
            'message' => $message,
        ]);
    }

    public function messageResponse($message, $error = false)
    {
        return Response::json([
            'error' => $error,
            'message' => $message,
        ]);
    }
}
