<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Request\Channels\Transcoder($api_key);

try {
	$transcoder = $client::unlinkFormat(4703,10);
	print_r($transcoder);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}
