<?php namespace Temoa\Transformer;

trait CourseTransformerTrait {

    public function transform()
    {
        return [
            'id' => $this->id,
            'folioInterno' => $this->internal_number,
            'folioExterno' => $this->external_number,
            'nombre' => $this->name,
            'categoria' => $this->category->name,
            'socioTecnologico' => $this->partner->transform(),
            'descripcion' => $this->description,
            'duracion' => $this->duration,
            'formato' => $this->format,
            'cancelado' => $this->cancelled ? 1 : 0,
            'creado' => $this->created_at->format('Y-m-d h:i:s'),
            'actualizado' => $this->updated_at->format('Y-m-d h:i:s'),
        ];
    }

    public function reverseTransform($item)
    {

    }
}