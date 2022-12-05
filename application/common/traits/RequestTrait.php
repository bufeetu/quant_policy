<?php

namespace app\common\traits;

use GuzzleHttp\Client as GuzzleHttp_Client;
use think\Exception;

trait RequestTrait
{
    /**
     * 发送get请求
     */
    public function sendGetRequest(string $base_uri,string $url, array $query)
    {
        try {
            $baseClient = new GuzzleHttp_Client(['base_uri' => $base_uri]);
            $res = $baseClient->request('GET', $url, ['query' => $query]);
            $code = $res->getStatusCode(); // 200
            if ($code!=200) {
                throw new Exception($res->getReasonPhrase());
            }
            $body = $res->getBody();
            $data=json_decode((string) $body, true);
            return alert_info(0, 'success', $data);
        } catch (Exception $e) {
            return alert_info(1, $e->getMessage());
        }
    }
    /**
     * 发送post请求
     */
    public function sendPostRequest(string $base_uri,string $url, array $body)
    {
        try {
            $this->baseClient = new GuzzleHttp_Client(['base_uri' => $base_uri]);
            $res = $this->baseClient->request('POST', $url, ['body' => json_encode($body, 512)]);
            $code = $res->getStatusCode(); // 200
            if ($code!=200) {
                throw new Exception($res->getReasonPhrase());
            }
            $body = $res->getBody();
            $data=json_decode((string) $body, true);
            return alert_info(0, 'success', $data);
        } catch (Exception $e) {
            return alert_info(1, $e->getMessage());
        }
    }
}
