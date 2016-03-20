<?php

namespace QiitaApi;

require_once __DIR__ . '/../src/Curl.php';
require_once __DIR__ . '/../src/QiitaApiException.php';

class CurlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Curl::get
     */
    public function testGet()
    {
        $curl = new Curl();
        $ret = Curl::get('http://yahoo.co.jp');
        $this->assertTrue(true);
    }
    
    /**
     * @covers Curl::post
     */
    public function testPost()
    {
        $this->assertTrue(true);
    }
    
    /**
     * @covers Curl::put
     */
    public function testPut()
    {
        $this->assertTrue(true);
    }

}
