<?php

namespace QiitaApi;

require_once __DIR__ . '/../src/Curl.php';
require_once __DIR__ . '/../src/QiitaApiException.php';

class CurlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \QiitaApi\Curl::get
     */
    public function testGet()
    {
        $ret = Curl::get('http://yahoo.co.jp');
        $this->assertTrue(true);
    }
    
    /**
     * @covers \QiitaApi\Curl::post
     */
    public function testPost()
    {
        $ret = Curl::post('http://yahoo.co.jp', array('a'));
        $this->assertTrue(true);
    }
    
    /**
     * @covers \QiitaApi\Curl::put
     */
    public function testPut()
    {
        $ret = Curl::put('http://yahoo.co.jp', array('a'));
        $this->assertTrue(true);
    }

}
