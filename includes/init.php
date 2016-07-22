<?php
define("DEBUG",TRUE);
define("PATH", "/myshop");
define("PASSWORD_SALT", "hjdhjdfdfjhjdhf");
session_start();


require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/functions.php';


spl_autoload_register(function($cn) {
    $file = __DIR__ . "/$cn.class.php";
    if (file_exists($file)) {
        require $file;
    }
});

$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
 
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__.'/../cache/compilation_cache',
    'debug' =>DEBUG
));
if (DEBUG) {
    $twig->addExtension(new Twig_Extension_Debug());
}
$twig->addGlobal("path", PATH);
$twig->addGlobal("messages", getFlashMessages());
//$twig->addGlobal("cart", new Cart());

$login = new Login();
if ($login->isLogin()) {
    $twig->addGlobal("user", $_SESSION['user']);
}