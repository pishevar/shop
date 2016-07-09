<?php
require './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
 
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__.'/cache/compilation_cache',
));

$name="ali ahmadi";
echo $twig->render('index.html.twig', array('name' => $name));