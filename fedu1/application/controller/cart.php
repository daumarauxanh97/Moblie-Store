<?php
namespace App\controller\Cart;
require 'application/model/home_model.php';
use Application\Model\Home_model;
require 'application/core/MY_controller.php';
use Application\Core\MY_Controller;
class cart extends MY_Controller{
	private $_homeModel;
	function __construct()
	{
		$this->module =trim(strtolower(__CLASS__));//lay ra ten class o dang chu thg
		$this->_homeModel=new Home_model;
		parent::__construct();
	}
	public function add()
	{
		if(isset($_GET['id_phone']))
		{
			$idPd=$_GET['id_phone']?? '';
				// echo $idPd;
		  //   	die();
			$idPd=(is_numeric($idPd)&& $idPd>0 )? $idPd : 0;
			$infoProduct=$this->_homeModel->getAllDataPhoneById($idPd);
			// echo "<pre>";
			// print_r($infoProduct);
			// die;
			if(!empty($infoProduct))
			{
				$qty=$_POST['qty'] ?? 1;
				// echo $qty;
				// die;
				//ktra xem gio hang ton tai hay chua
				if(isset($_SESSION['cart']))
				{
					$_SESSION['cart'][$idPd]['qty']+=$qty;
	                //tu lan 2 tro di ng dung mua sp\
	                //ktra xem sp muon mua them da ton tai hay chua neu da ton tai thi update so lg sp
	                //neu chua ton tai thi them moi
	                if(isset($_SESSION['cart'][$idPd]['id']) && $_SESSION['cart'][$idPd]['id']==$idPd)
	                {
	                	$_SESSION['cart'][$idPd]['qty']+=$qty;
	                    if($_SESSION['cart'][$idPd]['qty']+=$qty>5)
                	    {
		            		$_SESSION['cart'][$idPd]['qty']=5;
                	    }
	                }
	                else
	                {
	                    $_SESSION['cart'][$idPd]['id']=$infoProduct['id'];
						$_SESSION['cart'][$idPd]['phone_name']=$infoProduct['phone_name'];
						$_SESSION['cart'][$idPd]['images']=$infoProduct['images'];
						$_SESSION['cart'][$idPd]['gia']=$infoProduct['gia'];
						$_SESSION['cart'][$idPd]['qty']=$qty;
	                }
				}
				else
				{
					//lan dau ng dung mua sp
					//khoi tao gio hang
					$_SESSION['cart'][$idPd]['id']=$infoProduct['id'];
					$_SESSION['cart'][$idPd]['phone_name']=$infoProduct['phone_name'];
					$_SESSION['cart'][$idPd]['images']=$infoProduct['images'];
					$_SESSION['cart'][$idPd]['gia']=$infoProduct['gia'];
					$_SESSION['cart'][$idPd]['qty']=$qty;
				}	

				header('location:?c=cart&m=index');
			}
			else
			{
				header('location:?c=home');
			}
		}
		if (isset($_GET['id_laptop'])){
			$idPd=$_GET['id_laptop']?? '';
			// echo $idPd;
			// die();
			$idPd=(is_numeric($idPd)&& $idPd>0 )? $idPd : 0;
			$infoProduct=$this->_homeModel->getAllDataLaptopById($idPd);
			// echo "<pre>";
			// print_r($infoProduct);
			// die;
			if(!empty($infoProduct))
			{
				$qty=$_POST['qty'] ?? 1;
				// echo $qty;
				// die;
				//ktra xem gio hang ton tai hay chua
				if(isset($_SESSION['cart1']))
				{
	                //tu lan 2 tro di ng dung mua sp\
	                //ktra xem sp muon mua them da ton tai hay chua neu da ton tai thi update so lg sp
	                //neu chua ton tai thi them moi
	                if(isset($_SESSION['cart1'][$idPd]['id']) && $_SESSION['cart1'][$idPd]['id']==$idPd)
	                {
	                	$_SESSION['cart1'][$idPd]['qty']+=$qty;
	                }
	                else
	                {
	                    $_SESSION['cart1'][$idPd]['id']=$infoProduct['id'];
						$_SESSION['cart1'][$idPd]['laptop_name']=$infoProduct['laptop_name'];
						$_SESSION['cart1'][$idPd]['images']=$infoProduct['images'];
						$_SESSION['cart1'][$idPd]['gia']=$infoProduct['gia'];
						$_SESSION['cart1'][$idPd]['qty']=$qty;
	                }
				}
				else
				{
					//lan dau ng dung mua sp
					//khoi tao gio hang
					$_SESSION['cart1'][$idPd]['id']=$infoProduct['id'];
					$_SESSION['cart1'][$idPd]['laptop_name']=$infoProduct['laptop_name'];
					$_SESSION['cart1'][$idPd]['images']=$infoProduct['images'];
					$_SESSION['cart1'][$idPd]['gia']=$infoProduct['gia'];
					$_SESSION['cart1'][$idPd]['qty']=$qty;
				}	

				header('location:?c=cart&m=index');
			}
			else
			{
				header('location:?c=home');
			}
		}
	}
	public function index()
	{
		$data=[];
		$data['cart']=$_SESSION['cart'] ?? [];
        $data['cart1']=$_SESSION['cart1'] ?? [];
		$header=[];
		$header['title']="this is cart";
		$header['content']="this is cart-shopping";
		$this->loadHeader($header);
		$this->loadView('application/view/cart/index_view.php',$data);
		$this->loadFooter();
 	}
 	public function delete()
 	{
 		if(isset($_SESSION['cart']))
 		{
 			unset($_SESSION['cart']);
 		}
 		if(isset($_SESSION['cart1']))
 		{
 			unset($_SESSION['cart1']);
 		}
 		else
 		{
 			header('location:?c=cart&m=index');
 		}
 		header('location:?c=home');
 	}
 	public function remove(){

        $id = $_GET['id'] ?? '';
        $id = (is_numeric($id) && $id > 0) ? $id : 0;
        if(isset($_SESSION['cart'][$id]))
        {
            unset($_SESSION['cart'][$id]);
        }
        header('Location:?c=cart&m=index');

    }
    public function remove1(){

        $id = $_GET['id'] ?? '';
        $id = (is_numeric($id) && $id > 0) ? $id : 0;
        if(isset($_SESSION['cart1'][$id]))
        {
            unset($_SESSION['cart1'][$id]);
        }
        header('Location:?c=cart&m=index');

    }
 	function update()
	 {
	  if (isset($_POST['btnSubmit'])) {

	   //neu muon post mang len sever thi them []; sever tu dong hieu se day ca mang len sever.
	   //echo "<pre />";print_r($_POST);die;
	   $qtyPd = $_POST['txtQty'] ?? [];
	   // echo "<pre>";
	   // print_r( $qtyPd);
	   // die;
	   foreach($qtyPd as $key => $val)
	   {
	    if (isset($_SESSION['cart'][$key]) && $val <= 5)
	    {
	     $_SESSION['cart'][$key]['qty'] = $val;
	    }
	    if (isset($_SESSION['cart1'][$key]) && $val <= 5)
	    {
	     $_SESSION['cart1'][$key]['qty'] = $val;
	    }
	   }
	   header('location:?c=cart&m=index');
	  }
	 }
	 function order()
	 {
	 	if(isset($_POST['bnSubmit']))
	 	{
	 		$checkInsertFlag=false;
	 		$fullname=$_POST['txtHoTen'];
	 		$phone=$_POST['txtSoDienThoai'];
	 		$email=$_POST['txtEmail'];
	 		$address=$_POST['txtDiaChi'];
	 		//validate data
	 		$fullname=strip_tags($fullname);
	 		$phone=is_numeric($phone) ? $phone : '';
	 		$email=strip_tags($email);
	 		$address=strip_tags($address);
	 		//rang buoc du lieu va send mail
	 		//tien hanh insert du lieu vao database
	 		if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
	 		{
	 			foreach ($_SESSION['cart'] as $key => $val) 
	 			{
	 				$dataInsert=array(
                       'phone_id'=>$val['id'],
                       'nameCustomer'=>$fullname,
                       'phoneCustomer'=>$phone,
                       'emailCustomer'=>$email,
                       'addressCustomer'=>$address,
                       'status'=>0,
                       'money'=>($val['qty']*$val['gia']),
                       'qtyProduct'=>$val['qty'],
                       'create_time'=>date('Y-m-d H:i:s'),
                       'update_time'=>null
	 			       );
	 				// echo "<pre>";
	 				// print_r($dataInsert);
	 				// die;
	 				$insert=$this->_homeModel->insertOrderCustomer('orders',$dataInsert);
	 				if($insert)
	 				{
	 					$checkInsertFlag=true;
	 				}
	 			}
	 			if($checkInsertFlag)
	 			{
	 				unset($_SESSION['cart']);
	 			    header('location:?c=cart&m=index&state=success');
	 		    }
	 		    else
	 		    {
                    header('location:?c=cart&m=index&state=fail');
	 		    }
	 	    }
	 	}
	 }
}
$m =$_GET['m']??'index';
$home =new cart();
$home->$m();
?>