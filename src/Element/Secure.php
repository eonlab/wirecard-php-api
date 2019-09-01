<?php

namespace Wirecard\Element;

class Secure
{
    public $version;
    
    public $request;

    public $response;

    public $url;
    
    /**
     * @param $request
     * @param null $url
     * @return Secure
     */
    public static function createRequest($request, $url = null)
    {
        $secure = new self($url);
        $secure->request = $request;

        return $secure;
    }

    /**
     * @param $response
     * @param null $url
     * @return Secure
     */
    public static function createResponse($response, $url = null, $version = null)
    {
        $secure = new self($url, $version);
        $secure->response = $response;

        return $secure;
    }

    private function __construct($url, $version)
    {
        $this->url = $url;
        $this->version = $version;
    }
}
 
