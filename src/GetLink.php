<?php

namespace Bean\DeepLink;

class GetLink
{
    public static function get($provider, $sourceLink, $options = [])
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->post('https://api.branch.io/v1/url', [
            'json' => $options['data']
        ]);
        if ($res->getStatusCode() === 200) {
            return json_decode($res->getBody()->getContents(), true)['url'];
        }
    }
}

