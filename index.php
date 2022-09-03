<?php
include "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

$client = new Client();
$headers = [
  'Authorization' => 'oN6NMDRxqWX60Cd-JY47uKb9FvwQNE03'
];

$request = new Request('GET', 'https://ipt10-2022.mantishub.io/api/rest/issues?page_size=10&page=1', $headers);
$res = $client->sendAsync($request)->wait();
$bugs = $res->getBody()->getContents();

$bugs_list = json_decode($bugs);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>IPT10 Bugs</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<p><h1>IPT10 Bugs List</h1></p>
<p><a href="">BOBBY MARCKO L. CRUZ</a></p>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Summary</th>
            <th>Severity</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($bugs_list->issues as $bug){?> 
            <tr>
                <td><?php echo $bug->id;?></td>
                <td><?php echo $bug->summary;>?></td>
                <td><?php echo $bug->severity->name;>?></td>
                <td><?php echo $bug->status->name;>?></td>
        <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>

