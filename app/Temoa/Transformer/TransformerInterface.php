<?php namespace Temoa\Transformer;


interface TransformerInterface {

    public function transform();

    public function reverseTransform($item);

}
