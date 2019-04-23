<?php

namespace VirtualAge;

use VirtualAge\Xml\{
    Auth,
    Xml
};

class VirtualAge {

    private $auth;
    private $body;
    private $xml;

    public function __construct(string $login, string $senha) {
        $this->auth = new Auth($login, $senha);
    }

    public function setBody($body) : void {
        $this->body = $body;
    }

    public function getXML() : string {

        $this->xml = new XMl($this->auth, $this->body);

        return $this->xml->getXML();
    }
}