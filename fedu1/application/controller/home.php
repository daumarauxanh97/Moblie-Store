<?php
namespace App\controller\Home;
require 'application/model/home_model.php';
use Application\Model\Home_model;
require 'application/core/MY_controller.php';
use Application\Core\MY_Controller;
// class Home
// {
// 	public function index()
// 	{
// 		require 'application/view/home/index_view.php';
// 	}
// }
class Home extends MY_Controller{
	private $_homeModel;
	function __construct()
	{
		$this->module =trim(strtolower(__CLASS__));//lay ra ten class o dang chu thg
		$this->_homeModel=new Home_model;
		parent::__construct();
	}
	
	public function index()
	{
		$data=[];
		$data['allDataPhone']=$this->_homeModel->getAllDataPhone();
		$data['allDataLaptop']=$this->_homeModel->getAllDataLatop();
		$header=[];
		$header['title']="this is home";
		$header['content']="this is home shopping book";
		$this->loadHeader($header);
		// echo "<pre>";
		// print_r($header);
		// die();
		// $this->loadMenu();
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->loadView('application/view/home/index_view.php',$data);
		// $this->loadSideBar();
		$this->loadFooter();
	}
	// public function allData()
 //    {
 //        $data=[];
 //        $data['allDataPhone']=$this->_homeModel->getAllDataPhone();
 //    }
}
$m =$_GET['m']??'index';
$home =new Home();
$home->$m();
?>	
