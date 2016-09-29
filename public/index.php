<?php

//include autoloader
require '../vendor/autoload.php';


$request = Zend\Diactoros\ServerRequestFactory::fromGlobals();

$uri = $request->getUri();

print_r($uri->getHost());
echo "\n --- \n";
print_r($uri->getPath());
//get configuration from somewhere....
//$builder = new SixPlus\ApplicationBuilder($_SERVER, $_COOKIE, $_GET, $_FILES, $_POST);

//create app instance
//$app = $builder->getApplication();

//create an http server request
//$request = $builder->getServerRequest();

//run the app (give request, get response)
//$response = $app->handle($request);

//send response
//$response->send();
