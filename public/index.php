<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
$objet1 = new Hello();
echo $objet1->talk();
$objet2 = new \HelloWorld\SayHello();
echo $objet2->world();




