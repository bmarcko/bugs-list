<?php
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


$client = new Client();
$headers = [
  'Authorization' => 'oN6NMDRxqWX60Cd-JY47uKb9FvwQNE03',
  'Content-Type' => 'application/json'
];
$body = '{
  "text": "test note",
  "view_state": {
    "name": "public"
  }
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
