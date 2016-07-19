<?php

require './includes/init.php';



//echo $twig->render('index.html.twig', array());

$register = new Register();
try {
    $register->create("ali", "123", "ali", "ahmadi");
    $msg = "Registraion Complete.";
} catch (Exception $e) {
    if ($e->getCode() == 1062) {
        $msg = "Email already in use.";
    }else{
        throw $e;
    }
}
echo $msg;
