<?php
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$headers = [
  'Authorization' => 'oN6NMDRxqWX60Cd-JY47uKb9FvwQNE03',
  'Content-Type' => 'application/json'
];
$body = '{
  "username": "marcko",
  "password": "qwerty12345",
  "real_name": "Bobby Cruz",
  "email": "cruz.bobbymarcko@.auf.edu.ph",
  "access_level": {
    "name": "updater"
  },
  "enabled": false,
  "protected": false
}';
$request = new Request('POST', 'https://ipt10-2022.mantishub.io/api/rest/users/', $headers, $body);
$res = $client->sendAsync($request)->wait();
echo $res->getBody();
