<?php

namespace VirtualAge\Xml;

class Body {

    /**
     * @var array Lista de elementos
     */
    private $list = [];

    /**
     * @param string $element
     * @param array $attributes
     * @param string $value
     * @param array $subs
     */
    public function add(string $element = '', array $attributes = [], string $value = '', array $subs = []) : Body {

        $item = new BodyElement($element, $attributes, $value, $subs);

        $this->list[] = $item;

        return $this;
    }

    /**
     * @return array
     */
    public function getAll() : array {
        return $this->list;
    }
}