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
		$id_min=$_GET['min']?? '';
		$id_sx=$_GET['hang_sx']?? '';
		$id_table=$_GET['table']?? '';//
		$id_max=$_GET['max']?? '';
		$data=[];
		$data['allHangSX']=$this->_homeModel->getAllDataSXTable($id_table);
        $sap_xep=$_GET['sap_xep'] ?? "DESC";
        // echo $sap_xep;
        // die();
       //phan trang cho sp     
        $page = $_GET['page'] ?? "";
		$data['phone']=$this->_homeModel->Fullpanigate($page,$id_table,$id_sx,$sap_xep,$id_min,$id_max);
		$data['product']=$data['phone']['dataphone'];
		$data['page']=$data['phone']['pageHTML'];		
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