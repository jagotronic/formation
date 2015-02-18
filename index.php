<?php



require 'vendor/autoload.php';



use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->addCollection(
    $loader->import('@AcmeHelloBundle/Resources/config/routing.php'),
    '/'
);
return $collection;