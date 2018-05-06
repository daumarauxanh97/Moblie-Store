<?php
namespace App\controller;
require 'app/model/login_model.php';
use App\Model\login_model; 
class Login
{
	private $loginModel;
	function __construct()
	{
		$this->loginModel = new login_model();
	}
    public function logout()
    {
        if(isset($_SESSION['id'])&&isset($_SESSION['username'])&&isset($_SESSION['email'])&&isset($_SESSION['role']))
        {
            unset($_SESSION['id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            unset($_SESSION['role']);
            //print_r($_SESSION);die();
        }
        header('location:?c=login');
    }
	public function index()
	{
        $header=[];
        $header['title']="admin login";
		require 'app/view/login/index_view.php';

	}
	public function handel()
	{
		if(isset($_POST['btnSubmit']))
		{
			$username =$_POST['user']?? '';
            $username =strip_tags($username);

            $password =$_POST['password']?? '';
            $password =strip_tags($password);

            if(empty($username) or empty($password))
            {
            	header('location:?c=login&m=index&state=err');

            }
            else
            {
                 $checkLogin=$this->loginModel->checkLoginAdmin($username,$password);
                 if(!empty($checkLogin)&&isset($checkLogin['id']))
                 {
                    //dang nhap thanh cong di vao trang Dashboard
                    $_SESSION['id']=$checkLogin['id'];
                    $_SESSION['username']=$checkLogin['username'];
                    $_SESSION['email']=$checkLogin['email'];
                    $_SESSION['role']=$checkLogin['role'];
                    //print_r($_SESSION);die();
                    header('location:?c=dashboard');
                 }
                 else
                 {
                 	header('location:?c=login&m=index&state=fail');
                 }
            }
		}
	}
	 function __call($r,$q)
     {
     	echo "not found";
     }
}

$login =new Login();
$method =$_GET['m']?? 'index';
$login->$method();
?>