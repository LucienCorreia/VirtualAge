<?php

namespace VirtualAge\Xml;

use DOMDocument;
use VirtualAge\Xml\{
    Auth,
    Body
};

class Xml {

    private $xml;
    private $root;

    public function __construct(Auth $auth, Body $body) {

        $this->xml = new DOMDocument('1.0', 'UTF-8');
        $this->root = $this->xml->createElement('requisicao');
        $this->xml->appendChild($this->root);

        $elementAuth = $this->xml->createElement($auth->getElement());
        
        foreach ($auth->getAttributes() as $name => $value) {
            $elementAuth->setAttribute($name, $value);
        }

        $this->root->appendChild($elementAuth);

        foreach($body->getAll() as $b) {
            $elementBody = $this->xml->createElement($b->getElement(), $b->getValue());
            
            foreach ($b->getAttributes() as $name => $value) {
                $elementBody->setAttribute($name, $value);
            }

            if($b->getSubs()) {
                foreach($b->getSubs() as $sub) {
                    $elementChild = $this->xml->createElement($sub->getElement(), $sub->getValue());

                    foreach ($sub->getAttributes() as $name => $value) {
                        $elementChild->setAttribute($name, $value);
                    }

                    $elementBody->appendChild($elementChild);
                }
            }
    
            $this->root->appendChild($elementBody);
        } 
    }

    public function getXML() : string {
        return $this->xml->saveXML();
    }
}