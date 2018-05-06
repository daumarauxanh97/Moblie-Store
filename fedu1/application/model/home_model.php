<?php
namespace Application\Model;
require 'application/libs/PDODriver.php';
use App\libs\PDODriver;
use\PDO;
class Home_model extends PDODriver
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function getAllDataPhoneById($id)
	{
		$data=[];
		$sql ="SELECT a.*,b.name,c.ten_loai FROM phone AS a inner join Hang_sx AS b inner join loai_sp as c on a.id_sx=b.id and a.id_loai_sp=c.id  where a.id=:id limit 1";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':id',$id,PDO::PARAM_INT);
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetch(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;

	}

	public function getDataSameProductById($id,$id_sx)
    {
        $data=[];
		$sql ="SELECT * from phone as a where  a.id_sx=:id_sx and a.id<>:id limit 0,4 ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':id',$id,PDO::PARAM_INT);
			$stmt->bindPaRam(':id_sx',$id_sx,PDO::PARAM_INT);
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;
    }

    public function getDataSameLaptopById($id,$id_sx)
    {
        $data=[];
		$sql ="SELECT * from laptop as a where  a.id_sx=:id_sx and a.id<>:id limit 4";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':id',$id,PDO::PARAM_INT);
			$stmt->bindPaRam(':id_sx',$id_sx,PDO::PARAM_INT);
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;
    }

    public function getAllDataLaptopById($id)
	{
		$data=[];
		$sql ="SELECT a.*,b.name ,c.ten_loai FROM laptop AS a inner join Hang_sx AS b inner join loai_sp as c on a.id_sx=b.id and a.id_loai_sp=c.id  where a.id=:id limit 1";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':id',$id,PDO::PARAM_INT);
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetch(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;

	}

    public function updateViewPhone($idPhone,$view,$table)
    {
    	$data = [ 'view' => ($view + 1) ];
        return $this->update($table, $data, $idPhone);
    }

	public function getAllDataPhone()
	{
		$data=[];
		$sql ="SELECT a.*,b.name FROM phone AS a inner join Hang_sx AS b on a.id_sx=b.id  order by a.create_time limit 8";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':table',$table,PDO::PARAM_STR);
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;
	}

	public function getAllDataLatop()
	{
		$data=[];
		$sql ="SELECT a.*,b.name FROM laptop AS a inner join Hang_sx AS b on a.id_sx=b.id   order by a.create_time limit 8";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;

	}

	public function insertOrderCustomer($table,$data)
	{
        return $this->insert($table,$data);
	}

	public function getAllDataTable($table)
	{

		$data=[];
		$sql ="SELECT * FROM {$table}";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllDataSXPhone()
	{

		$data=[];
		$sql ="SELECT DISTINCT name FROM hang_sx as a inner join phone as b where b.id_sx=a.id ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllDataSXLaptop()
	{

		$data=[];
		$sql ="SELECT DISTINCT name FROM hang_sx as a inner join laptop as b where b.id_sx=a.id ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllLaptopHang_sx($ten)
	{

		$data=[];
		$sql ="SELECT *  FROM laptop as a inner join hang_sx as b where a.id_sx=b.id and b.name =:ten ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':ten',$ten,PDO::PARAM_STR);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllPhoneHang_sx($ten)
	{

		$data=[];
		$sql ="SELECT *  FROM phone as a inner join hang_sx as b where a.id_sx=b.id and b.name =:ten ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':ten',$ten,PDO::PARAM_STR);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllPhoneHang_sxLimit($ten,$start,$limit)
	{

		$data=[];
		$sql ="SELECT *  FROM phone as a inner join hang_sx as b where a.id_sx=b.id and b.name =:ten LIMIT :start,:limmit ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':ten',$ten,PDO::PARAM_STR);
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllPhoneLimit($start,$limit)
	{

		$data=[];
		$sql ="SELECT *  FROM phone LIMIT :start,:limmit";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllLaptopLimit($start,$limit)
	{

		$data=[];
		$sql ="SELECT *  FROM laptop LIMIT :start,:limmit";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllLimit($table,$start,$limit)
	{

		$data=[];
		$sql ="SELECT *  FROM  {$table} LIMIT :start,:limmit";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}
	public function Fullpanigate($currentPage=-1,$table="",$hang_sx="",$sap_xep="",$min="",$max="")
	{
	  $total = $this->getAllDataTable($table);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/3);
	  if($currentPage <= 0) 
	  {
	   $currentPage =1;
	  }elseif($currentPage > $totalPage)
	  {
	   $currentPage = $totalPage;
	  }
	  $start = ($currentPage -1) * 3;
	  $html  = '';
	  $html .= "<nav aria-label='Page navigation'>";
	  $html .= "<ul class='pagination phantrang' >";
	  $html .= "";

	  $linkCurrent="?c=all&m=index&loai_sp=".$table.$hang_sx.$sap_xep.$min.$max."&page={page}";
	  if($currentPage > 1 && $currentPage <= $totalPage)
	     {
	         $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage-1), $linkCurrent)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	     }
	   for($i=1;$i<=$totalPage;$i++)
	    {
	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', $i, $linkCurrent)."'>".$i."</a></li>";
	   }
	   if($currentPage < $totalPage && $currentPage >= 1)
	     {
	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage+1), $linkCurrent)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	      }
	     $html .= "</ul>";
	     $html .= "</nav>";
	     $phone= $this->allProduct($table,$hang_sx,$sap_xep,$min,$max,$start,3);
	     return array('pageHTML' => $html,
	        'dataphone'=>$phone
	      );
	}

	/*public function panigate($currentPage=-1,$table)
	{
	  $total = $this->getAllDataTable($table);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/3);
	  if($currentPage <= 0) 
	  {
	   $currentPage =1;
	  }elseif($currentPage > $totalPage)
	  {
	   $currentPage = $totalPage;
	  }
	  $start = ($currentPage -1) * 3;
	  $html  = '';
	  $html .= "<nav aria-label='Page navigation'>";
	  $html .= "<ul class='pagination phantrang' >";
	  $html .= "";

	  $linkCurrent="?c=all&m=index&loai_sp=".$table."&page={page}";
	  if($currentPage > 1 && $currentPage <= $totalPage)
	     {
	         $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage-1), $linkCurrent)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	     }
	   for($i=1;$i<=$totalPage;$i++)
	    {
	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', $i, $linkCurrent)."'>".$i."</a></li>";
	   }
	   if($currentPage < $totalPage && $currentPage >= 1)
	     {
	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage+1), $linkCurrent)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	      }
	     $html .= "</ul>";
	     $html .= "</nav>";
	     $laptop= $this->getAllLimit($table,$start,3);
	     return array('pageHTML' => $html,
	        'dataphone'=>$laptop
	      );
	}

	public function getAllProductHang_sxLimit($table,$ten,$start,$limit)
	{

		$data=[];
		$sql ="SELECT *  FROM {$table} as a inner join hang_sx as b where a.id_sx=b.id and b.name =:ten LIMIT :start,:limmit ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':ten',$ten,PDO::PARAM_STR);
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function getAllProductHang_sx($table,$ten)
	{

		$data=[];
		$sql ="SELECT *  FROM {$table} as a inner join hang_sx as b where a.id_sx=b.id and b.name =:ten ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':ten',$ten,PDO::PARAM_STR);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

	public function panigate1($currentPage=-1,$table,$hang_sx)//phan trang sp theo hang sx
	{
	  $total = $this->getAllProductHang_sx($table,$hang_sx);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/2);
	  if($currentPage <= 0) 
	  {
	   $currentPage =1;
	  }elseif($currentPage > $totalPage)
	  {
	   $currentPage = $totalPage;
	  }
	  $start = ($currentPage -1) * 2;
	  $html  = '';
	  $html .= "<nav aria-label='Page navigation'>";
	  $html .= "<ul class='pagination phantrang' >";
	  $html .= "";
      if(isset($_GET['hang_sxp']))
      {
          $linkCurrent="?c=all&m=index&hang_sxp=".$hang_sx."&page={page}";
      }
      if(isset($_GET['hang_sxl']))
      {
          $linkCurrent="?c=all&m=index&hang_sxl=".$hang_sx."&page={page}";
      }
	  if($currentPage > 1 && $currentPage <= $totalPage)
	     {
	         $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage-1), $linkCurrent)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	     }
	   for($i=1;$i<=$totalPage;$i++)
	    {

	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', $i, $linkCurrent)."'>".$i."</a></li>";
	   }
	   if($currentPage < $totalPage && $currentPage >= 1)
	     {
	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage+1), $linkCurrent)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	      }	
	  $html .= "</ul>";
	     $html .= "</nav>";
	     $phone= $this->getAllProductHang_sxLimit($table,$hang_sx,$start,2);
	     // echo "<pre>";
	     // print_r($html);
	     // die();
	     return array('pageHTML' => $html,
	        'dataphone'=>$phone
	      );
	}
	public function getAllDataGiaAscLimit($table,$start,$limit)
	{

		$data=[];
		$sql ="SELECT * FROM {$table} order by gia limit :start,:limmit";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}
	public function getAllDataGiaHang_sxAscLimit($table,$hang_sx,$start,$limit)
	{

		$data=[];
		$sql ="SELECT * FROM {$table} as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx  order by  gia  limit :start,:limmit ";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':hang_sx',$hang_sx,PDO::PARAM_STR);
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}
	public function panigate2($currentPage=-1,$table)//phan trang sp theo gia tang dan
	{
	  $total = $this->getAllDataTable($table);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/2);
	  if($currentPage <= 0) 
	  {
	   $currentPage =1;
	  }elseif($currentPage > $totalPage)
	  {
	   $currentPage = $totalPage;
	  }
	  $start = ($currentPage -1) * 2;
	  $html  = '';
	  $html .= "<nav aria-label='Page navigation'>";
	  $html .= "<ul class='pagination phantrang' >";
	  $html .= "";
      $linkCurrent="?c=all&m=index&loai_spp=".$table."&sap_xep=asc&page={page}";
	  if($currentPage > 1 && $currentPage <= $totalPage)
	    {
	         $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage-1), $linkCurrent)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	    }
	   for($i=1;$i<=$totalPage;$i++)
	    {

	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', $i, $linkCurrent)."'>".$i."</a></li>";
	   }
	   if($currentPage < $totalPage && $currentPage >= 1)
	    {
	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage+1), $linkCurrent)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	     }	
	  $html .= "</ul>";
	     $html .= "</nav>";
	     $phone= $this->getAllDataGiaAscLimit($table,$start,2);
	     // echo "<pre>";
	     // print_r($html);
	     // die();
	     return array('pageHTML' => $html,
	        'dataphone'=>$phone
	      );
	}
	public function panigate3($currentPage=-1,$table,$hang_sx)//phan trang sp theo gia tang dan + hang sx
	{
	  $total = $this->getAllProductHang_sx($table,$hang_sx);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/2);
	  if($currentPage <= 0) 
	  {
	   $currentPage =1;
	  }elseif($currentPage > $totalPage)
	  {
	   $currentPage = $totalPage;
	  }
	  $start = ($currentPage -1) * 2;
	  $html  = '';
	  $html .= "<nav aria-label='Page navigation'>";
	  $html .= "<ul class='pagination phantrang' >";
	  $html .= "";
      if(isset($_GET['hang_sxpp']) && ($_GET['sap_xep'])=='asc')
      {
          $linkCurrent="?c=all&m=index&hang_sxpp=".$hang_sx."&sap_xep=asc&page={page}";
      }
      if(isset($_GET['hang_sxll']) &&($_GET['sap_xep'])=='asc')
      {
          $linkCurrent="?c=all&m=index&hang_sxll=".$hang_sx."&sap_xep=asc&page={page}";
      }
	  if($currentPage > 1 && $currentPage <= $totalPage)
	     {
	         $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage-1), $linkCurrent)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	     }
	   for($i=1;$i<=$totalPage;$i++)
	    {

	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', $i, $linkCurrent)."'>".$i."</a></li>";
	   }
	   if($currentPage < $totalPage && $currentPage >= 1)
	     {
	        $html .= "<li style='list-style:none; display:inline-block;'><a href='".str_replace('{page}', ($currentPage+1), $linkCurrent)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	      }	
	  $html .= "</ul>";
	     $html .= "</nav>";
	     $phone= $this->getAllDataGiaHang_sxAscLimit($table,$hang_sx,$start,2);
	     // echo "<pre>";
	     // print_r($html);
	     // die();
	     return array('pageHTML' => $html,
	        'dataphone'=>$phone
	      );
	}
	public function between($table,$min,$max)
	{
        $data=[];
		$sql ="SELECT *  FROM  {$table} where gia>=:min and gia<=:max order by gia";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
			$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}
	public function betweenLimit($table,$min,$max,$start,$limit)
	{
        $data=[];
		$sql ="SELECT *  FROM  {$table} where gia>=:min and gia<=:max order by gia limit :start,:limmit";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
			$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
			$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
			$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
			if ($stmt->execute()) 
			{
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}
	public function panigate4($currentPage=-1,$table,$min,$max)//phan trang sp theo gia tang dan + hang sx
	{
	  $total = $this->between($table,$min,$max);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/2);
	  if($currentPage <= 0) 
	  {
	   $currentPage =1;
	  }elseif($currentPage > $totalPage)
	  {
	   $currentPage = $totalPage;
	  }
	  $start = ($currentPage -1) * 2;
	  $html  = '';
	  $html .= "<nav aria-label='Page navigation'>";
	  $html .= "<ul class='pagination phantrang' >";
	  $html .= "";
      $linkCurrent="?c=all&m=index&loai_spp=".$table."&min=".$min."&max=".$max."&page={page}";
	  if($currentPage > 1 && $currentPage <= $totalPage)
	     {
	         $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', ($currentPage-1), $linkCurrent)."' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
	     }
	   for($i=1;$i<=$totalPage;$i++)
	    {

	        $html .= "<li style='list-style:none; display:inline-block; padding-left:25px;'><a href='".str_replace('{page}', $i, $linkCurrent)."'>".$i."</a></li>";
	   }
	   if($currentPage < $totalPage && $currentPage >= 1)
	     {
	        $html .= "<li style='list-style:none; display:inline-block;'><a href='".str_replace('{page}', ($currentPage+1), $linkCurrent)."' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	      }	
	  $html .= "</ul>";
	     $html .= "</nav>";
	     $phone= $this->between($table,$min,$max,$start,2);
	     // echo "<pre>";
	     // print_r($html);
	     // die();
	     return array('pageHTML' => $html,
	        'dataphone'=>$phone
	      );
	}*/
	public function allProduct($table,$hang_sx="",$sap_xep="",$min="",$max="",$start,$limit)
	{
        $data=[];
        if($hang_sx=="")
        {
	        	$sql ="SELECT *  FROM  {$table} where gia>=:min and gia<=:max order by gia :sap_xep limit :start,:limmit";
	        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':sap_xep',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        elseif ($sap_xep=="") {
	        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx and gia>=:min and gia<=:max order by gia limit :start,:limmit";
	        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        elseif ($min=="" && $max=="") {
        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx order by gia :sap_xep limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':sap_xep',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        elseif ($hang_sx=="" && $sap_xep=="") {
        	$sql ="SELECT *  FROM  {$table} where gia>=:min and gia<=:max order by gia  limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        elseif ($hang_sx=="" && $min=="" && $max=="") {
        	$sql ="SELECT *  FROM  {$table} order by gia :sap_xep limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':sap_xep',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        elseif ($sap_xep=="" && $min=="" && $max=="") {
        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx  order by gia limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        elseif ($hang_sx=="" && $sap_xep=="" && $min=="" && $max=="") {
        	$sql ="SELECT *  FROM  {$table}  limit :start,:limmit";
	        $stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        else {
        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx and gia>=:min and gia<=:max order by gia :sap_xep limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':sap_xep',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }		
		// echo "<pre>";
		// print_r($data);
		// die();
		return $data;
	}

}
?>