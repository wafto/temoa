<?php namespace Api\V1;

use Temoa\Command\Course\ListCommand;
use Temoa\Command\Course\CreateCommand;
use Temoa\Command\Course\ReadCommand;
use Temoa\Command\Course\UpdateCommand;
use Temoa\Command\Course\DestroyCommand;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Temoa\Command\ListingSanitizer;
use Api\V1\V1Controller;
use Request;

class CoursesController extends V1Controller {

    public function index()
    {
        $input = Request::only('sort', 'direction', 'page', 'size', 'search');

        $data = $this->execute(ListCommand::class, $input, [
            ListingSanitizer::class
        ]);

        return $this->paginatedResponseTransformed($data);
    }

    public function show($id)
    {
        try
        {
            $course = $this->execute(ReadCommand::class, compact('id'));
            return $this->itemResponseTransformed($course);
        }
        catch (ModelNotFoundException $e)
        {
            return $this->notFoundResponse(sprintf('No se encontro el curso con el id %s', $id));
        }
    }

}