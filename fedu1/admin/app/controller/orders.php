<?php
namespace App\Controller\Orders;
require 'app/core/My_Controller.php';
require 'app/model/product_model.php';
use App\core\My_Controller;
use App\Model\Product_model;

class orders extends My_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->pdModel =new Product_model;
	}
	function __call($r,$q)
	{
		echo "not found";
	}
	public function index()
	{
		$data=[];
		$data['lstOrders']=$this->pdModel->getAllDataOrderCustomers();
		// echo "<pre>";
		// print_r($data['lstOrders']);
		// die;
		$header['title']="this is product";
		$header['content']="this is product content";
		$this->loadHeader($header);
		$this->loadSideBar();
		$this->loadView('app/view/orders/index_view.php',$data);
		$this->loadFooter();
	}
	public function handle()
	{
		//lay du lieu gui len
		$status=$_POST['status'] ?? '';
		$idOrder=$_POST['idOrder']?? '';
		//validate
		$status=($status ==1 or $status ==-1) ? $status : '';
		$idOrder=(is_numeric($idOrder) && $idOrder >0 ) ? $status : '';
		//xu ly
		if($status=='' or $idOrder=='')
		{
			echo "err";
		}
		else
		{
			$dataUpdate=['status'=> $status];
			$up=$this->pdModel->updateStatusOrder('orders',$dataUpdate,$idOrder);
			if($up)
			{
				echo "ok";
			}
			else
			{
				echo "fail";
			}
		}
	}

}
$product=new orders();
$method=$_GET['m']?? 'index';
$product->$method();
?>