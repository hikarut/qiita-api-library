<?php

namespace QiitaApi;

use QiitaApi;

//require_once __DIR__ . '/../src/Curl.php';

class CurlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Curl::get
     */
    public function testGet()
    {
        $curl = new Curl();
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
