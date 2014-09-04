<?php 

//require 'vendor/autoload.php';

class Service{



 function __construct() { }

function init()
{
	$url = 'https://ninja.lemonstand.com/api/v2';
	$client = new GuzzleHttp\Client(['base_url' => $url]);
	return $client;
}

public function makeRequest($request)
{
	$auth = '*******************';
	$client = self::init();
		$response = $client->get('/'.$request);
		$response->addHeader('authorization', $auth);
			die($response);
		//$json = $response->xml();
		return $response;
		//, [   'key' =>  ['D1Gae75GwxEg4I0QnfmLAxPGZQoMq2IhM16wZ7z2'], 'secret' => ['1uulQsd1ejOG2ZPOLjiQkBZjIFDw0mpdyVQr5sov'], 'token' => ['4lYL1MJ59TokUNjvEqFifhQOsS5dw0tPiAiE3zZt']  ]
}

public function writeToDB($products)
{

}

}
?>