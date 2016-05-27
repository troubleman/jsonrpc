<?php
require __DIR__."/vendor/autoload.php";

use JsonRPC\Client;


$client = new Client('http://rpc.homestead.com');
$result = $client->execute('add', [3, 5]);

echo $result;