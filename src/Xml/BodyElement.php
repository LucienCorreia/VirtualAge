<?php

namespace VirtualAge\Xml;

class BodyElement {

    private $attributes = [];
    private $element;
    private $value;

    public function __construct($element, array $attributes, string $value = '') {
        $this->element = $element;
        $this->attributes = $attributes;
        $this->value = $value;
    }

    public function getElement() : string {
        return $this->element;
    }

    public function getAttributes() : array {
        return $this->attributes;
    }

    public function getValue() : string {
        return $this->value;
    }
}