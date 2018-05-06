<?php
namespace Application\Core;

 class MY_Controller
 {
 	protected $module;
 	function __construct()//ham de xoa session detail(product.php) de tranh di xang cac tang view
 	{
 		$module=$_GET['c'] ?? '';
 		if((strtolower($module)!=='product') && !isset($_SESSION['detail']))
 		{
 			$_SESSION['detail']='updateView_'.$_SERVER['REMOTE_ADDR'];
 		}
 	}
 	protected function loadHeader($header = [])
 	{
 		$title=$header['title']?? '';
 		$content=$header['content']?? '';
 		$tabHeader=$this->module;
        $arrTab=explode("\\", $tabHeader);
        $tabHeader=end($arrTab);
        $countCart=(isset($_SESSION['cart']) && !empty($_SESSION['cart']))?count($_SESSION['cart']) :0;
 		require 'application/view/partials/header_view.php';
 	}
 	// protected function loadMenu()
 	// {
 	// 	require 'application/view/partials/menu_view.php';
 	// }
 	protected function loadView($pathView,$passData=[])
 	{
 		$data=$passData;
 		require"{$pathView}";
 	}
 	// protected function loadSideBar()
 	// {
  //      require 'application/view/partials/sidebar_view.php';
 	// }
 	protected function loadFooter()
 	{
       require 'application/view/partials/footer_view.php';
 	}
}
?>