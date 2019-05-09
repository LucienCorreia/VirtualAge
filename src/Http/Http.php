<?php

namespace VirtualAge\Http;

use SoapClient;

class Http {

    /**
     * @var SoapClient
     */
    private $soap;

    /**
     * @var string XML
     */
    private $xml;

    /**
     * @param string $url
     */
    public function __construct(string $url) {

        $this->soap = new SoapClient($url);
    }

    /**
     * @param string $xml
     * @return object VirtualAge\Http\Http
     */
    public function setXML(string $xml) : Http {

        $xml = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $xml);

        $this->xml = $xml;

        return $this;
    }

    /**
     * @param void $callable
     * @return void
     */
    public function getResponse(callable $callable) {

        try {
            $response = $this->soap->__soapCall('requisicao', [
                'XML' => $this->xml
            ]);

            return $callable($response);
        } catch(SoapFault $e) {
            if($e->getCode() == 504) {
                return $this->getResponse($callable);
            }

            throw $e;
        }
    } 
}