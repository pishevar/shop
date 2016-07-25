<?php

require './includes/init.php';

$product = new Product();
$products = $product->getList(0, null, ['visit_count DESC']);
var_dump($products);
$document = new Document();

$document->initDocument("Test");
$document->addTransaction(1, 2, 1000, "test 1", "Test 2");



echo $twig->render('index.html.twig', array('products' => $products));

?>
<html>
    <body>
        <a href="register.php">register</a>
        <a href="login.php">login</a>
        
    </body>
    
</html>