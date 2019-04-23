<?php

namespace VirtualAge\Xml;

class Body {

    private $attributes = [];
    private $element;
    private $value;

    public function add($element, array $attributes, string $value = '') : Body {
        $this->element = $element;
        $this->attributes = $attributes;
        $this->value = $value;

        return $this;
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