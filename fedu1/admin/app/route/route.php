<?php

session_start();
require 'app/config/constant.php';
require 'app/helper/common_helpper.php';
class Route
{
     public function login()
     {
     	require 'app/controller/login.php';
     }
     public function dashboard()
     {
     	require 'app/controller/dashboard.php';
     }
     public function product()
     {
          require 'app/controller/product.php';
     }
     public function laptop()
     {
          require 'app/controller/laptop.php';
     }
     public function orders()
     {
          require 'app/controller/orders.php';
     }
     function __call($r,$q)
     {
     	echo "not found";
     }
}
$route = new Route();
$controller =$_GET['c'] ?? 'login';
$route->$controller();

?>