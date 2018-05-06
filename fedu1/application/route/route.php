<?php
session_start();
require 'application/config/constant.php';
class Route 
{
	public function home()
	{
		require 'application/controller/home.php';
	}
	public function __call($params,$method)
	{
		echo "404 not found";
	}
	public function cart()
	{
		require 'application/controller/cart.php';
	}
	public function product()
	{
		require 'application/controller/product.php';
	}
	public function all()
	{
		require 'application/controller/all.php';
	}
	public function order()
	{
		require 'application/controller/order.php';
	}
	
}
$c =isset($_GET['c'])?trim($_GET['c']):'home';
$controller = new Route();
$controller->$c();	
?>