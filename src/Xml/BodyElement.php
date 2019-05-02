<?php

namespace VirtualAge\Xml;

class BodyElement {

    /**
     * @var array Atributos do elemento
     */
    private $attributes = [];

    /**
     * @var string NOme do elemento
     */
    private $element = '';

    /**
     * @var string Valor do elemento
     */
    private $value = '';

    /**
     * @var array Subelementos
     */
    private $subs = [];

    /**
     * @param string $element
     * @param array $attributes
     * @param string $value
     * @param array $subs
     */
    public function __construct(string $element = '', array $attributes = [], string $value = '', array $subs = []) {
        $this->element = $element;
        $this->attributes = $attributes;
        $this->value = $value;
        $this->subs = $subs;
    }

    /**
     * @return string
     */
    public function getElement() : string {
        return $this->element;
    }

    /**
     * @return array
     */
    public function getAttributes() : array {
        return $this->attributes;
    }

    /**
     * @return string
     */
    public function getValue() : string {
        return $this->value;
    }

    /**
     * @return array
     */
    public function getSubs() : array {
        return $this->subs;
    }
}