<?php

namespace QiitaApi;

use QiitaApi\Exception;

class Curl
{
    /*
     * タイムアウト
     *
     * @var int
     */
    const TIMEOUT = 10;
    /*
     * ユーザーエージェント
     *
     * @var string
     */
    const USER_AGENT = 'userAgent';
    /*
     * Content-Type
     *
     * @var string
     */
    const CONTENT_TYPE = 'Content-Type: application/json';

    /*
     * GETリクエスト
     *
     * @param string $url
     * @return array $response
     */
    public static function get($url)
    {
        return self::request('GET', $url);
    }
    
    /*
     * POSTリクエスト
     *
     * @param string $url
     * @param array $data
     * @return array $response
     */
    public static function post($url, $data)
    {
        return self::request('POST', $url, $data);
    }

    /*
     * PUTリクエスト
     *
     * @param string $url
     * @param array $data
     * @return array $response
     */
    public static function put($url, $data)
    {
        return self::request('PUT', $url, $data);
    }

    /*
     * curlリクエスト
     *
     * @param string $method
     * @param string $url
     * @param array $data
     * @return array $response
     */
    private static function request($method, $url, $data = array())
    {
        $ch = curl_init();
        
        // 共通項目のセット
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, self::USER_AGENT);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(self::CONTENT_TYPE));

        // メソッドの振り分け
        if ($method === 'GET') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        } elseif ($method === 'POST') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        } elseif ($method === 'PUT') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        }

        // データがあればセット
        if (!empty($data)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        // リクエスト
        $result = curl_exec($ch);

        if ($result === false) {
            throw new Exception\QiitaApiException('curl error.');
        }
        
        return json_decode($result, true);
    }
}
