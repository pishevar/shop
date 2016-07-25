<?php

require './includes/init.php';
$msg="";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $login = new login();
    $email = escapeString($_POST['email']);
    $password = escapeString($_POST['password']);
    if ($login->dologin($email, $password)) {
        redirect("index.php");
    } else {
        $msg="Invalid Username or password";
    }
}

echo $twig->render('login.html.twig', array("message"=>$msg));
