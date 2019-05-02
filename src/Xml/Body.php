<?php

namespace VirtualAge\Xml;

class Body {

    private $list = [];

    public function add($element, array $attributes, string $value = '') : Body {

        $item = new BodyElement($element, $attributes, $value);

        $this->list[] = $item;

        return $this;
    }

    public function getAll() : array {
        return $this->lesi;
    }
}