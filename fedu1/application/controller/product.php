<?php 
namespace App\controller\Product;
require 'application/model/home_model.php';
use Application\Model\Home_model;
require 'application/core/MY_controller.php';
use Application\Core\MY_Controller;
class Product extends MY_Controller
{
	private $_homeModel;
	function __construct()
	{
		$this->module =trim(strtolower(__CLASS__));//lay ra ten class o dang chu thg
		parent::__construct();
		$this->_homeModel=new Home_model;
	}
	public function detail()
	{
		if (isset($_GET['id_phone'])) 
		{
			$idProduct=$_GET['id_phone'] ?? '';
			// echo $idProduct;
			// die();
			$idProduct =is_numeric($idProduct) && $idProduct>0 ? $idProduct : 0;
			//lay thong tin chi tiet san pham
			$infoPd=$this->_homeModel->getAllDataPhoneById($idProduct);
			// echo"<pre>";
			// print_r($infoPd);
			// die;

			if(isset($_SESSION['detail']))//de phong reset trang de tang view
			{
				//update luot xem
				// echo('huy ngu cmnr');
				// die();
				$update=$this->_homeModel->updateViewPhone($idProduct,$infoPd['view'],'phone');
				// echo($update);
				// die;
				if($update)
				{
					// echo($_SESSION['detail']);
					// die;
				    unset($_SESSION['detail']);
				}

			}

			if(empty($infoPd))
			{
				echo "not found";
			}
			else
			{
			   $data['info']=$infoPd;
			   //lay ra nhung sp cung the hang sx vs sp dang xem-(tru cai dang xem)
			   $data['sameProduct']=$this->_homeModel->getDataSameProductById($idProduct,$infoPd['id_sx']);
			   // echo "<pre>";
			   // print_r($idProduct.$infoPd['id_sx']);
			   // die;
			   //xu ly update luot xem
			   //khoi tao 1 session check xem ng dung dang dung o trang nay chua
			   $header=[];
			   $header['title']="this is product detail";
			   $header['content']="this product detail content";
			   $this->loadHeader($header);
			   // $this->loadMenu();
			   $this->loadView('application/view/product/index_view.php',$data);	
			   // $this->loadSideBar();
			   $this->loadFooter();
			}
		}
		elseif (isset($_GET['id_laptop']))
		{
            $idProduct=$_GET['id_laptop'] ?? '';
			// echo $idProduct;
			// die();
			$idProduct =is_numeric($idProduct) && $idProduct>0 ? $idProduct : 0;
			//lay thong tin chi tiet san pham
			$infoPd=$this->_homeModel->getAllDataLaptopById($idProduct);
			// echo"<pre>";
			// print_r($infoPd);
			// die;

		    if(isset($_SESSION['detail']))//de phong reset trang de tang view
		    {
				//update luot xem
				// echo('huy ngu cmnr');
				// die();
				$update=$this->_homeModel->updateViewPhone($idProduct,$infoPd['view'],'laptop');
				// echo($update);
				// die;
				if($update)
				{
					// echo($_SESSION['detail']);
					// die;
				    unset($_SESSION['detail']);
				}
		    }

			if(empty($infoPd))
			{
				echo "not found";
			}
			else
			{
			   $data['info']=$infoPd;
			   //lay ra nhung sp cung the hang sx vs sp dang xem-(tru cai dang xem)
			   $data['sameProduct']=$this->_homeModel->getDataSameLaptopById($idProduct,$infoPd['id_sx']);
			   // echo "<pre>";
			   // print_r($idProduct.$infoPd['id_sx']);
			   // die;
			   //xu ly update luot xem
			   //khoi tao 1 session check xem ng dung dang dung o trang nay chua
			   $header=[];
			   $header['title']="this is product detail";
			   $header['content']="this product detail content";
			   $this->loadHeader($header);
			   // $this->loadMenu();
			   $this->loadView('application/view/product/index_view.php',$data);	
			   // $this->loadSideBar();
			   $this->loadFooter();
			}
		}
	}
}
$m =$_GET['m']??'detail';
$home =new Product();
$home->$m();
?>
