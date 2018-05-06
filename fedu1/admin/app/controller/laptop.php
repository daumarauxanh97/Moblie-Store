<?php
namespace App\Controller;
require 'app/core/My_Controller.php';
require 'app/model/product_model.php';
use App\core\My_Controller;
use App\Model\Product_model;

class Product extends My_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->pdModel =new Product_model;
	}
	function __call($r,$q)
	{
		echo "not found";
	}
	public function index()
	{
		$data=[];
    $keyword=$_GET['s']?? '';
    $page=$_GET['page']?? '';
    $page=(is_numeric($page) && $page>0) ? $page : 1;
    $dataLink=[
        'c'=>'laptop',
        'm'=>'index',
        'page'=>'{page}',
        's'=>$keyword
    ];
    $links=create_Links($dataLink);
    $laptop=$this->pdModel->getAllDataLaptopByKeyword($keyword);
    $data['keyword']=$keyword;
    //bat dau su dung ham phan trang
    $panigate=panigation(count($laptop),$page,ROW_LIMIT,$keyword,$links);

    $data['product']=$this->pdModel->getDataLaptopByPage($panigate['keyword'],$panigate['start'],$panigate['limit']);
    // echo "<pre>";
    // print_r($data['product']);
    // die();
    $data['panigation']=$panigate['paginationHtml'];
		$header['title']="this is product";
		$header['content']="this is product content";
		$this->loadHeader($header);
		//$this->loadSideBar();
		$this->loadView('app/view/laptop/index_view.php',$data);
		$this->loadFooter();
	}
	public function add()
	{
		$data=[];
		if(isset($_GET['state'])&& $_GET['state']==='err')
		{
		   $data['errAdd']=$_SESSION['errAdd']?? [];
	  }
    $data['loai_sp']=$this->pdModel->getAllDataLoai_sp('loai_sp');
		$data['laptop']=$this->pdModel->getAllDataLaptop();
		$data['hang_sx']=$this->pdModel->getAllDataHang_sx('hang_sx');
		$header['title']="this is add product";
		$header['content']="this is add product content";
		$this->loadHeader($header);
		$this->loadSideBar();
		$this->loadView('app/view/laptop/add_view.php',$data);
		$this->loadFooter();
	}
// public function update()
//   {
//    //load data and handle data
//    $header = [];
//    $header['title'] =  "This is update";
//    $header['content'] = "This is content update";
   
//    $data=[];
//    $data['loai_sp']=$this->pdModel->getAllDataLoai_sp('loai_sp');
//    $data['hang_sx']=$this->pdModel->getAllDataHang_sx('hang_sx');
//    if (isset($_GET['state']) && $_GET['state']==='err') {
//     $data['errAdd'] = $_SESSION['errAdd'] ?? [];
//    }
//    $id = $_GET['id'] ?? '';

//    $data['phone']= $this->pdModel->getAllDataById('phone',(int)$id);
//    $this->loadHeader($header);
//    $this->loadView('app/view/product/update_view.php',$data);;
//   }
	// public function handleadd()
	// {
 //        if(isset($_POST['btnSubmit']))
 //        {
 //           $phonename=$_POST['phonename'] ?? '';
 //           $hangsx=$_POST['hang_sx'] ?? '';
 //           $loai_sp=$_POST['loai_sp'] ?? '';
 //           $mieu_ta=$_POST['mieu_ta'] ?? '';
 //           $gia=$_POST['gia'] ?? '';
 //           $man_hinh=$_POST['man_hinh'] ?? '';
 //           $do_phan_giai=$_POST['do_phan_giai'] ?? '';
 //           $ram=$_POST['ram'] ?? '';
 //           $camera_sau=$_POST['camera_sau'] ?? '';
 //           $camera_truoc=$_POST['camera_truoc'] ?? '';
 //           $bo_nho_trong=$_POST['bo_nho_trong'] ?? '';
 //           $the_nho=$_POST['the_nho'] ?? '';
 //           $pin=$_POST['pin'] ?? '';
 //           $filename=null;
 //           if(isset($_FILES['image']))
 //           {
 //              $filename=myUploadData($_FILES);
 //           }
 //           $checkAdd=myValidateAddPhone($phonename,$hangsx,$loai_sp,$mieu_ta,$gia,$man_hinh,$do_phan_giai,$ram,$camera_sau,$camera_truoc,$bo_nho_trong,$the_nho,$pin,$filename);
 //           $flag=true;
 //           foreach ($checkAdd as $key => $val) 
 //            {
	//             if(!empty($val))
	//             {
	//            	  $flag=false;
	//            	  break;
	//             }
 //            }
 //            if($flag)
 //            {
 //                if(isset($_SESSION['errAdd']))
 //                {
 //                	unset($_SESSION['errAdd']);
 //                }
 //                $dataPhone=array(
 //                	'phone_name'=>$phonename,
 //                  'images'=>$filename,
 //                	'id_sx'=>$hangsx,
 //                	'id_loai_sp'=>$loai_sp,
 //                	'mieu_ta'=>$mieu_ta,
 //                	'gia'=>$gia,
 //                	'man_hinh'=>$man_hinh,
 //                	'do_phan_giai'=>$do_phan_giai,
 //                	'ram'=>$ram,
 //                	'camera_sau'=>$camera_sau,
 //                	'view'=>0,
 //                  'camera_truoc'=>$camera_truoc,
 //                  'bo_nho_trong'=>$bo_nho_trong,
 //                	'the_nho'=>$the_nho,
 //                  'pin'=>$pin,
 //                	'create_time'=>date('Y-m-d H:i:s'),
 //                	'update_time'=>null);
 //                $add=$this->pdModel->addDataProduct($dataPhone,'phone');
 //                if($add)
 //                {
 //                     header('location:?c=product&state=success');
 //                }
 //                else
 //                {
 //                	header('location:?c=product&state=fail');
 //                }
 //            }
 //            else
 //            {
 //            	$_SESSION['errAdd']=$checkAdd;
 //            	header('location:?c=product&m=add&state=err');
 //            }
 //        }
	// }
 //  public function handleupdate()
 //  {
 //   if (isset($_POST['btnSubmit'])) 
 //   {
 //   $phonename=$_POST['phonename'] ?? '';
 //   $hangsx=$_POST['hang_sx'] ?? '';
 //   $loai_sp=$_POST['loai_sp'] ?? '';
 //   $mieu_ta=$_POST['mieu_ta'] ?? '';
 //   $gia=$_POST['gia'] ?? '';
 //   $man_hinh=$_POST['man_hinh'] ?? '';
 //   $do_phan_giai=$_POST['do_phan_giai'] ?? '';
 //   $ram=$_POST['ram'] ?? '';
 //   $camera_sau=$_POST['camera_sau'] ?? '';
 //   $camera_truoc=$_POST['camera_truoc'] ?? '';
 //   $bo_nho_trong=$_POST['bo_nho_trong'] ?? '';
 //   $the_nho=$_POST['the_nho'] ?? '';
 //   $pin=$_POST['pin'] ?? '';
 //   $filename=null;
 //    if (isset($_FILES['image'])) {
 //     $filename = myUploadData($_FILES);
 //    }
 //    $checkAdd = myValidateAddPhone($phonename,$hangsx,$loai_sp,$mieu_ta,$gia,$man_hinh,$do_phan_giai,$ram,$camera_sau,$camera_truoc,$bo_nho_trong,$the_nho,$pin,$filename);

 //    $flag= TRUE;
 //    foreach($checkAdd as $key =>$val)
 //    {
 //     if (!empty($val)) {
 //      $flag=FALSE;
 //      break;
 //     }
 //    }
 //    if ($flag==TRUE) 
 //    {
 //     if (isset($_SESSION['errAdd']))
 //      {
 //      unset($_SESSION['errAdd']);
 //      }
 //     $dataPhone=array(
 //     'phone_name'=>$phonename,
 //                  'images'=>$filename,
 //                  'id_sx'=>$hangsx,
 //                  'id_loai_sp'=>$loai_sp,
 //                  'mieu_ta'=>$mieu_ta,
 //                  'gia'=>$gia,
 //                  'man_hinh'=>$man_hinh,
 //                  'do_phan_giai'=>$do_phan_giai,
 //                  'ram'=>$ram,
 //                  'camera_sau'=>$camera_sau,
 //                  'view'=>0,
 //                  'camera_truoc'=>$camera_truoc,
 //                  'bo_nho_trong'=>$bo_nho_trong,
 //                  'the_nho'=>$the_nho,
 //                  'pin'=>$pin,
 //                  'create_time'=>date('Y-m-d H:i:s'),
 //                  'update_time'=>null);
     
 //     $update =$this->pdModel->updateData($dataPhone,'phone',$id);
 //     if ($update) {
 //      header('Location:?c=admin&state=success');
 //     }
 //     else
 //     {
 //      $_SESSION['errAdd'] = $checkAdd;
 //      header('Location:?c=admin&m=update&state=fail');
 //     }
 //    }
 //    else
 //    {
 //     $_SESSION['errAdd'] = $checkAdd; 
 //     header('Location:?c=admin&m=update&state=err');
 //    }
 //   }
 //  }
  public function delete()
  {
     $id = $_GET['id'] ?? '';
     $data ='';
     $data=$this->pdModel->xoasanpham('laptop',$id);
     header('Location:?c=laptop');
  }

}
$product=new Product();
$method=$_GET['m']?? 'index';
$product->$method();
?>