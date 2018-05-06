<?php
namespace App\core;
class My_Controller 
{
	function __construct()
	{
		$this->checkLoginAdmin();
	}
	protected function getUsernameAdmin()
	{
		$username=$_SESSION['username']?? '';
		return $username;
	}
	protected function getEmailAdmin()
	{
		$email=$_SESSION['email']?? '';
		return $email;
	}
	protected function getIdAdmin()
	{
		$id=$_SESSION['id']?? '';
		$id=is_numeric($id)?$id : 0;
		return $id;
	}
    protected function getRoleAdmin()
	{
		$role=$_SESSION['role']?? '';
		$role=is_numeric($role)?$role : '';
		return $role;
	}
    protected function checkLoginAdmin()
    {
    	$id=$this->getIdAdmin();
    	$username=$this->getUsernameAdmin();
    	if(empty($username) or $id<=0)
    	{
    		header('location:?c=login');
    		die();
    	}
    }

	protected function loadHeader($header = array())
	{
        $title =$header['title']?? '';
        $content=$header['content']?? '';
        $username=$this->getUsernameAdmin();
        require 'app/view/partials/header_view.php';

	}
	// protected function loadSidebar()
	// {
	// 	require 'app/view/partials/sidebar_view.php';
	// }
	protected function loadView($pathView,$Passdata = [])
	 {
	 	$data=$Passdata;
	   require "{$pathView}";
	 }
}
?>