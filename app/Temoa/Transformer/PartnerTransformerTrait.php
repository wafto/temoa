<?php namespace Temoa\Transformer;

trait PartnerTransformerTrait {

    public function transform()
    {
        return [
            'id' => $this->id,
            'nombre' => $this->business_name,
            'responsable' => $this->responsable,
            'rfc' => $this->rfc,
            'areaEspecialidad' => $this->specialty_area,
            'creado' => $this->created_at->format('Y-m-d h:i:s'),
            'actualizado' => $this->updated_at->format('Y-m-d h:i:s'),
        ];
    }

    public function reverseTransform($item)
    {

    }

}