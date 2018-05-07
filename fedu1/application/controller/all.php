<?php
namespace App\controller\All;
require 'application/model/home_model.php';
use Application\Model\Home_model;
require 'application/core/MY_controller.php';
use Application\Core\MY_Controller;
class all extends MY_Controller
{
	private $_homeModel;
	function __construct()
	{
		$this->module =trim(strtolower(__CLASS__));//lay ra ten class o dang chu thg
		$this->_homeModel=new Home_model;
		parent::__construct();
	}
	public function index()
	{
		$id_sxp=$_GET['hang_sxp']?? '';//
		$id_sxpp =$_GET['hang_sxpp']?? '';
		$id_sxl=$_GET['hang_sxl']?? '';
		$id_sxll=$_GET['hang_sxll']?? '';
		$id_min=$_GET['min']?? '';
		$id_max=$_GET['max']?? '';
		$id_sx=$_GET['hang_sx']?? '';
		$id_table=$_GET['table']?? '';//
		$data=[];
		// $data['allPhone']=$this->_homeModel->getAllDataPhone();
		// $data['allLaptop']=$this->_homeModel->getAllDataLatop();
		$data['allHangSX']=$this->_homeModel->getAllDataSXTable($id_table);
        // $data['allHangSXPhone']=$this->_homeModel->getAllDataSXPhone();
        // $data['allPhoneHangSX']=$this->_homeModel->getAllPhoneHang_sx($id_sxp);
        // $data['allLaptopHangSX']=$this->_homeModel->getAllLaptopHang_sx($id_sxl);
        
        //khai bao ten table
        $phone='phone';
        $laptop='laptop';

        //khai bao kieu sap xep
        $sap_xep=$_GET['sap_xep']?? '';;
        // $new='new';
        // $asc='asc';
        // $view='view';
        // $desc='desc';

        //phan trang cho sp phone        
        $page = $_GET['page'] ?? "";
		$data['phone']=$this->_homeModel->Fullpanigate($page,$id_table,$id_sx,$sap_xep,$id_min,$id_max);
		$data['allPhone']=$data['phone']['dataphone'];
		$data['page']=$data['phone']['pageHTML'];
		////phan trang cho sp laptop  
		// $page = $_GET['page'] ?? '';
		// $data['laptop']=$this->_homeModel->Fullpanigate($page,$id_table,$id_sxl,$sap_xep,$id_min,$id_max);
		// $data['allLaptop']=$data['phone']['dataphone'];
		// $data['page']=$data['laptop']['pageHTML'];
		

		//phan trang cho sp  theo hang sx
		// $data['phoneApple']=$this->_homeModel->panigate1($page,$phone,$id_sxp);
		// $data['allPhoneHangSXApple']=$data['phoneApple']['dataphone'];
		// $data['page2']=$data['phoneApple']['pageHTML'];

  //       $data['phoneOppo']=$this->_homeModel->panigate1($page,$phone,$id_sxp);
		// $data['allPhoneHangSXOppo']=$data['phoneOppo']['dataphone'];
		// $data['page3']=$data['phoneOppo']['pageHTML'];

  //       $data['laptopApple']=$this->_homeModel->panigate1($page,$laptop,$id_sxl);
		// $data['allLatopHangSXApple']=$data['laptopApple']['dataphone'];
		// $data['page4']=$data['laptopApple']['pageHTML'];

		// $data['laptopOppo']=$this->_homeModel->panigate1($page,$laptop,$id_sxl);
		// $data['allLaptopHangSXOppo']=$data['laptopOppo']['dataphone'];
		// $data['page5']=$data['laptopOppo']['pageHTML'];
       
  //       $data['phoneAsc']=$this->_homeModel->panigate2($page,$phone);
		// $data['allPhoneAsc']=$data['phoneAsc']['dataphone'];
		// $data['page6']=$data['phoneAsc']['pageHTML'];

  //       $data['laptopAsc']=$this->_homeModel->panigate2($page,$laptop);
		// $data['allLaptopAsc']=$data['laptopAsc']['dataphone'];
		// $data['page7']=$data['laptopAsc']['pageHTML'];

  //       $data['phoneAppleAsc']=$this->_homeModel->panigate3($page,$phone,$id_sxpp);
		// $data['allPhoneAppleAsc']=$data['phoneAppleAsc']['dataphone'];
		// $data['page8']=$data['phoneAppleAsc']['pageHTML'];

		// $data['phoneOppoAsc']=$this->_homeModel->panigate3($page,$phone,$id_sxpp);
		// $data['allPhoneOppoAsc']=$data['phoneOppoAsc']['dataphone'];
		// $data['page9']=$data['phoneOppoAsc']['pageHTML'];

		// $data['laptopAppleAsc']=$this->_homeModel->panigate3($page,$laptop,$id_sxll);
		// $data['allLaptopAppleAsc']=$data['laptopAppleAsc']['dataphone'];
		// $data['page10']=$data['laptopAppleAsc']['pageHTML'];

		// $data['laptopAsusAsc']=$this->_homeModel->panigate3($page,$laptop,$id_sxll);
		// $data['allLaptopAsusAsc']=$data['laptopAsusAsc']['dataphone'];
		// $data['page11']=$data['laptopAsusAsc']['pageHTML'];

		// $data['laptopBetween']=$this->_homeModel->panigate4($page,$laptop,$id_min,$id_max);
  //       $data['allLaptopBetween']=$data['laptopBetween']['dataphone'];
		// $data['page12']=$data['laptopBetween']['pageHTML'];
		// echo "<pre>";
  //       print_r($data['allLaptopBetween']);
  //       die();   
		$header=[];
		$header['title']="this is all ";
		$header['content']="this is all product";
		$this->loadHeader($header);
		$this->loadView('application/view/all/index_view.php',$data);
		$this->loadFooter();
 	}
}
$m =$_GET['m']??'index';
$home =new all();
$home->$m();
?>