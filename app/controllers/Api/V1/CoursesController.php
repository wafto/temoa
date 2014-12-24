<?php namespace Api\V1;

use Temoa\Command\Course\ListCommand;
use Temoa\Command\Course\CreateCommand;
use Temoa\Command\Course\ReadCommand;
use Temoa\Command\Course\UpdateCommand;
use Temoa\Command\Course\DestroyCommand;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Laracasts\Validation\FormValidationException;
use Temoa\Command\ListingSanitizer;
use Api\V1\V1Controller;
use Request, Course, Input, Auth;

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
        }
        catch (ModelNotFoundException $e)
        {
            return $this->notFoundResponse(sprintf('No se encontro el curso con el id %s', $id));
        }
        return $this->itemResponseTransformed($course);
    }

    public function store()
    {
        $input = Input::only('id', 'folioInterno', 'folioExterno', 'nombre', 'categoria', 'socioTecnologico', 'descripcion', 'duracion', 'formato', 'cancelado', 'visible', 'imagen', 'tags', 'inicio', 'creado', 'actualizado');
        try
        {
            $transformed = (new Course())->reverseTransform($input);
            $transformed['partner_id'] = Auth::user()->partner->id;
            $transformed['image'] = null;
            $transformed['internal_number'] = generateRandomString();
            $course = $this->execute(CreateCommand::class, $transformed);
        }
        catch (FormValidationException $e)
        {
            return $this->validationFail($e->getErrors());
        }
        return $this->itemResponseTransformed($course);
    }

    public function update($id)
    {
        $input = Input::only('id', 'folioInterno', 'folioExterno', 'nombre', 'categoria', 'socioTecnologico', 'descripcion', 'duracion', 'formato', 'cancelado', 'visible', 'imagen', 'tags', 'inicio', 'creado', 'actualizado');
        try
        {
            $transformed = (new Course())->reverseTransform($input);
            $transformed['partner_id'] = Auth::user()->partner->id;
            $transformed['image'] = null;
            $course = $this->execute(UpdateCommand::class, $transformed);
        }
        catch (FormValidationException $e)
        {
            return $this->validationFail($e->getErrors());
        }
        return $this->itemResponseTransformed($course);
    }

    public function destroy($id)
    {
        $success = $this->execute(DestroyCommand::class, compact('id'));

        if ($success)
        {
            return $this->messageResponse('El curso fue eliminada con éxito!');
        }
        return $this->messageResponse('No fue posible eliminar el curso', true);
    }
}
