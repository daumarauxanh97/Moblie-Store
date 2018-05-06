<?php
function myUploadData($file=null)
{
  // echo "<pre>";
  // print_r($file);
  // die();
   if($file['image']['error']==0)
    //image se co thuoc tinh
    // Array
    // (
    // [imagebook] => Array
    //     (
    //         [name] => 2016-09-26.png
    //         [type] => image/png
    //         [tmp_name] => E:\xampp\tmp\php822.tmp
    //         [error] => 0 //neu ko loi
    //         [size] => 67518
    //     )

    // )
   {
   	$filename =$file['image']['name'];
   	$tmpname=$file['image']['tmp_name'];
	   	if($tmpname !=='')
	   	{
	   		if(move_uploaded_file($tmpname, PATH_UPLOAD_IMG.$filename))
	   		{
	   			return $filename;
	   		}
	   	}
   }
   return ;
}
function myValidateAddPhone($phonename,$sx,$loaisp,$mieu_ta,
	                            $gia,$man_hinh,$do_phan_giai,$ram,$camera_sau,$camera_truoc,$bo_nho_trong,$the_nho,$pin,$filename)
{
    $error=[];
    $error['phone_name']=(!empty($phonename)?'' :'enter phone name');
    $error['sx']=(is_numeric($sx) && $sx >0) ? '' : 'enter hang sx';
    $error['loaisp']=(is_numeric($loaisp) && $loaisp >0) ? '' : 'enter loai sp';
    $error['mieu_ta']=(!empty($mieu_ta)?'' :'enter mieu_ta ');
    $error['gia']=(is_numeric($gia) && $gia >0) ? '' : 'enter price';
    $error['man_hinh']=(!empty($man_hinh)?'' :'enter man hinh ');
    $error['do_phan_giai']=(!empty($do_phan_giai)?'' :'enter do phan giai ');
    $error['ram']=(!empty($ram)?'' :'enter ram ');
    $error['camera_sau']=(!empty($camera_sau)?'' :'enter camera sau  ');
    $error['camera_truoc']=(!empty($camera_truoc)?'' :'enter camera truoc  ');
    $error['bo_nho_trong']=(!empty($bo_nho_trong)?'' :'enter bo nho trong  ');
    $error['the_nho']=(!empty($the_nho)?'' :'enter the nho  ');
    $error['pin']=(!empty($pin)?'' :'enter pin  ');
    $error['filename']=(!empty($filename)?'' :'enter image phone');
    return $error;
}
function create_Links($data)
{
  $stringUri='';
  $uri='';
  foreach($data as $key => $val)
  {
    $uri.="&{$key}={$val}";
  }
  $stringUri.=BASE_URL."?".(!empty($uri)? ltrim($uri,"&") : '');
  return $stringUri;
}

function panigation($totalRecord,$currentPage,$rowLimit,$keyword,$links)
{
  //di xac dinh lai currentpage => can tinh dc totalpage
  $totalPage=ceil($totalRecord/$rowLimit);
  if($currentPage<=0)
  {
    $currentPage=1;
  }
  elseif($currentPage==$totalPage)
  {
    $currentPage=$totalPage;
  }
  $start =($currentPage -1)*$rowLimit;
  $html='';
  $html.="<nav aria-label='Page navigation'>";
  $html.="<ul class='pagination'>";
  //xu ly nut preview
  if($currentPage>1 && $currentPage<=$totalPage)
  {
    $html.="<li><a href='".str_replace('{page}', ($currentPage-1),$links)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span>
</a></li>";
  }
  //het nut preview
  //xu ly cho cac trang con lai
  for($i=1;$i<=$totalPage;$i++)
  {
    //kiem tra xem ng dung dang dung o trang hientai hay ko neu dung active hieu ung cho ng dung bt
    if($i==$currentPage)
    {
      $html.="<li class='active'><a>".$currentPage." <span class='sr-only'>(current)</span></a></li>";

    }
    else
    {
      $html.="<li><a href='".str_replace('{page}', $i,$links)."'>".$i."</a></li>";
    }

  }
  //het
  //xu ly nut next page
  if($currentPage<$totalPage && $currentPage>=1)
  {
    $html.= "<li><a href='".str_replace('{page}', ($currentPage+1), $links)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
  }
  //het
  $html.="</ul>";
  $html.="</nav>";

  return array(
    'page'=>$currentPage,
    'start'=>$start,
    'limit'=>$rowLimit,
    'paginationHtml'=>$html,
    'keyword'=>$keyword
    
    );
}
?>