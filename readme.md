# Simple generate deeplink

##
```
composer require toancong/deeplink
```
## Example

```
#.env file
DEEPLINKING_PROVIDER=branch.io
DEEPLINKING_SECRET=key_test_peGildZNO7f9pfIji7bV5nhetE12345
```

```
$sourceLink = '/user?'.http_build_query($params);
$data = [
    'branch_key' => env('DEEPLINKING_SECRET'),
    'sdk'        => 'api',
    'channel'    => 'Marketing',
    'feature'    => 'Register User',
    'data'       => [
        '$deeplink_path' => $sourceLink,
        '$fallback_url'  => env('WEB_URL').$sourceLink,
        'custom_object'  => [
            'page'   => 'MarketingRegisterUser',
            'params' => $params,
        ]
    ],
];
$link = \Bean\DeepLink\GetLink::get(env('DEEPLINKING_PROVIDER'), $sourceLink, compact('data'));
```
