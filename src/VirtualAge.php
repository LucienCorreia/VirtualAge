<?php

namespace VirtualAge;

use VirtualAge\Xml\Auth;
use VirtualAge\Xml\Xml;

class VirtualAge {

    /**
     * @var object VirtualAge\Xml\Auth
     */
    private $auth;

    /**
     * @var object VirtualAge\Xml\Body
     */
    private $body;

    /**
     * @var object VirtualAge\Xml\Xml
     */
    private $xml;

    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password) {
        $this->auth = new Auth($login, $password);
    }

    /**
     * @param object VirtualAge\Xml\Body
     * @return void
     */
    public function setBody($body) : void {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getXML() : string {

        $this->xml = new XMl($this->auth, $this->body);

        return $this->xml->getXML();
    }
}