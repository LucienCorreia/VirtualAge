<?php

namespace VirtualAge\Http;

use SoapClient;

class Http {

    private $soap;
    private $function;
    private $xml;

    public function __construct(string $url) {

        $this->soap = new SoapClient($url);
    }

    public function setXML(string $xml) : Http {

        $xml = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $xml);

        $this->xml = $xml;

        return $this;
    }

    public function getResponse() {

        $response = $this->soap->__soapCall('requisicao', [
            'XML' => $this->xml
        ]);

        return $response;
    } 
}