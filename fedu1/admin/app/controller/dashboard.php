<?php
namespace App\controller;
require 'app/model/home_model.php';
use App\Model\Home_model;
require 'app/core/My_Controller.php';
use App\Core\My_Controller;
class Dashboard extends My_Controller
{
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
    	//load header
    	$header=[];
    	$header['title']='this is dashboard';
    	$header['content']='this is dashboard content';
    	$this->loadHeader($header);

    	// load sidebar
    	// $this->loadSidebar();

    	//load content view
    	$this->loadView('app/view/dashboard/index_view.php',$data);

    	//load footer
    	// $this->loadFooter();
    }
    public function add()
    {
        
    }

}

$dashboard = new Dashboard();
$method =$_GET['m']?? 'index';
$dashboard->$method();
?>