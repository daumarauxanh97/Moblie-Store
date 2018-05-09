<?php
namespace App\controller\Search;
require 'application/model/home_model.php';
use Application\Model\Home_model;
require 'application/core/MY_controller.php';
use Application\Core\MY_Controller;
class search extends MY_Controller
{
	private $_homeModel;
	function __construct()
	{
		$this->module =trim(strtolower(__CLASS__));//lay ra ten class o dang chu thg
		$this->_homeModel=new Home_model;
		parent::__construct();
	}
	public function keyWord()
	{
	    $data=[];
	  if(isset($_REQUEST['btnSearch']))
	    {
        $keyword = $_REQUEST['search'] ?? '';
		$keyword = trim($keyword);
        //phan trang cho sp     
        $page = $_GET['page'] ?? "";
		$data['phone']=$this->_homeModel->getAllDataPhoneByKeyWord($keyword);
        $data['laptop']=$this->_homeModel->getAllDataLaptopByKeyWord($keyword);
	    }
		$header=[];
		$header['title']="this is search ";
		$header['content']="this is search result";
		$this->loadHeader($header);
		$this->loadView('application/view/search/index_view.php',$data);
		$this->loadFooter();
 	}
}
$m =$_GET['m']??'keyWord';
$home =new search();
$home->$m();
?>