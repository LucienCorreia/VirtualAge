<?php

namespace VirtualAge\Xml;

use DOMDocument;
use VirtualAge\Xml\Auth;

class Xml {

    private $xml;
    private $root;

    public function __construct(Auth $auth, $body) {

        $this->xml = new DOMDocument('1.0', 'UTF-8');
        $this->root = $this->xml->createElement('requisicao');
        $this->xml->appendChild($this->root);

        $elementAuth = $this->xml->createElement($auth->getElement());
        
        foreach ($auth->getAttributes() as $name => $value) {
            $elementAuth->setAttribute($name, $value);
        }

        $this->root->appendChild($elementAuth);

        $elementBody = $this->xml->createElement($body->getElement(), $body->getValue());
        
        foreach ($body->getAttributes() as $name => $value) {
            $elementBody->setAttribute($name, $value);
        }

        $this->root->appendChild($elementBody);
    }

    public function getXML() {
        return $this->xml->saveXML();
    }
}