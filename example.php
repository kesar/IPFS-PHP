<?php

use IPFSPHP\IPFS;

include 'vendor/autoload.php';

$client = new IPFS('127.0.0.1', 8080, 5001);

$hash = $client->add($filePath);
