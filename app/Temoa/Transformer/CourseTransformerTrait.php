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
            'imagen' => $this->image,
            'tags' => $this->tags->lists('name'),
            'inicio' => $this->start_at,
            'creado' => $this->created_at->format('Y-m-d h:i:s'),
            'actualizado' => $this->updated_at->format('Y-m-d h:i:s'),
        ];
    }

    public function reverseTransform($item)
    {
        return [
            'id' => $item['id'],
            'internal_number' => $item['folioInterno'],
            'external_number' => $item['folioExterno'],
            'name' => $item['nombre'],
            'category' => $item['categoria'],
            'partner_id' => $item['socioTecnologico'],
            'description' => $item['descripcion'],
            'duration' => $item['duracion'],
            'format' => $item['formato'],
            'cancelled' => $item['cancelado'],
            'image' => $item['imagen'],
            'visible' => $item['visible'],
            'tags' => $item['tags'],
            'start_at' => $item['inicio'],
            'created_at' => $item['creado'],
            'updated_at' => $item['actualizado'],
        ];
    }
}
