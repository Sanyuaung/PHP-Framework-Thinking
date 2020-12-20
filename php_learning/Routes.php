<?php
    // $router->register([
    //     ""=>"Controllers/IndexController.php",
    //     "about"=>"Controllers/AboutController.php",
    //     "contactus"=>"Controllers/ContactController.php",
    //     "orders"=>"Controllers/OrderController.php",
    //     "customer"=>"Controllers/CustomerController.php",
    //     "names"=>"Controllers/add-name.php",
    //     ]);

$router->get("","PagesController@home");
$router->get("about","PagesController@about");
$router->get("contactus","PagesController@contact");
$router->get("orders","PagesController@order");
$router->get("customer","PagesController@customer");
$router->post("names","PagesController@create");
$router->get("","UserController@index");









?>
