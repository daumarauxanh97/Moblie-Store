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
	public function getMax($table){
		$data=[];
		$sql="SELECT max(gia) as gia FROM {$table} ";
		$stmt = $this->db->prepare($sql);
			if ($stmt) {
				if ($stmt->execute()) 
				{
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetch(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        return $data;
	}/*
	public function getAllDataTable($table,$hang_sx="",$sap_xep="",$min=0,$max=-1)
	{
		//$maxhuy="30000000";
        //die("hello".$max);
		$data=[];
		$hang_sx="%".$hang_sx."%";

<<<<<<< HEAD
	public function getAllDataTable($table,$hang_sx="",$sap_xep="",$min="",$maxhuy="")
	{
=======
		$sql="SELECT * FROM {$table} as a inner join hang_sx as b where a.id_sx=b.id and b.name like :hang_sx and gia>=:min and gia<=:max order by gia desc";
		$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$hang_sx,PDO::PARAM_STR);
				//$stmt->bindPaRam(':sap_xep',$sap_xep,PDO::PARAM_STR);
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
       // print_r($data);
        //die($sap_xep);a
		return $data;
	}*/
	public function getAllDataTable($table,$hang_sx="",$sap_xep="",$min,$max)
	{
        //die($sap_xep);
>>>>>>> 5e0ce9f75b2c21826ef87f536eaa3ca37d6df6a9
		$data=[];
		$hang_sx="%".$hang_sx."%";
		$sql="SELECT * FROM {$table} as a inner join hang_sx as b where a.id_sx=b.id and b.name like :hang_sx and gia>=:min and gia<=:max order by gia :sap_xep";
		$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$hang_sx,PDO::PARAM_STR);
				$stmt->bindPaRam(':sap_xep',$sap_xep,PDO::PARAM_STR);
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
<<<<<<< HEAD
=======
        //print_r($data);
        //die($hang_sx.$max);
>>>>>>> 5e0ce9f75b2c21826ef87f536eaa3ca37d6df6a9
		return $data;
	}

	public function getAllDataSXTable($table)
	{

		$data=[];
		$sql ="SELECT DISTINCT name FROM hang_sx as a inner join {$table} as b where b.id_sx=a.id ";
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
	  $total = $this->getAllDataTable($table,$hang_sx,$sap_xep,$min,$max);
	  $totalRecord = count($total);
	  $totalPage = ceil($totalRecord/3);
	  // $totalPage="300000";
	  // die($totalPage);
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
      if($hang_sx=="" && $sap_xep !="")
      {
        $linkCurrent="?c=all&m=index&table=".$table."&sap_xep=".$sap_xep."&min=".$min."&max=".$max."&page={page}";
      }
	  if ($sap_xep=="" && $hang_sx!="") {
	  	$linkCurrent="?c=all&m=index&table=".$table."&hang_sx=".$hang_sx."&min=".$min."&max=".$max."&page={page}";
	  }
	  if ($sap_xep!="" && $hang_sx!="" ) {
	  	$linkCurrent="?c=all&m=index&table=".$table."&hang_sx=".$hang_sx."&sap_xep=".$sap_xep."&page={page}"; 
	  }
	  if ($hang_sx=="" && $sap_xep==""  && $min!="" && $max!="" ) {
	  	$linkCurrent="?c=all&m=index&table=".$table."&min=".$min."&max=".$max."&page={page}";
	  }
	  // if ($hang_sx=="" && $min=="" && $max==""  && $sap_xep!="" ) {
	  // 	$linkCurrent="?c=all&m=index&table=".$table."&sap_xep=".$sap_xep."&page={page}";
	  // }
	  // if ($sap_xep=="" && $min=="" && $max=="" && $hang_sx!="") {
	  // 	$linkCurrent="?c=all&m=index&table=".$table."&hang_sx=".$hang_sx."&page={page}";
	  // }
	  // if ($hang_sx=="" && $sap_xep=="" && $min=="" && $max=="" ) {
	  // 	$linkCurrent="?c=all&m=index&table=".$table."&page={page}"; 
	  // }
	  if ($hang_sx!="" && $sap_xep !="" && $min!="" && $max!=""){
	  	 $linkCurrent="?c=all&m=index&table=".$table."&hang_sx=".$hang_sx."&sap_xep=".$sap_xep."&min=".$min."&max=".$max."&page={page}";
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
 
	     $phone= $this->allProduct($table,$hang_sx,$sap_xep,$min,$max,$start,3);
	     //echo "<pre>";
	     //print_r($phone);die();
	     //$phone4= count($phone);
	  	 //die();
	     return array('pageHTML' => $html,
	        'dataphone'=>$phone
	      );
	}

	public function allProduct($table,$hang_sx="",$sap_xep="",$min="",$max="",$start,$limit)
	{
		//die($table.$hang_sx.$sap_xep.$min.$max.$start.$limit);
        $data=[];
        if($hang_sx=="" && $sap_xep !="" && $min!="" && $max!=""  )
        {

	        	$sql ="SELECT *  FROM  {$table} where gia>=:min and gia<=:max order by gia :sap_xep limit :start,:limmit";
	        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':sap_xep',$sap_xep,PDO::PARAM_STR);
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
        if ($sap_xep=="" && $hang_sx!="" && $min!="" && $max!="" ) {
        	//die("Hello World");
	        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx and gia>=:min and gia<=:max order by gia limit :start,:limmit";
	        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$hang_sx,PDO::PARAM_STR);
				$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					// die($sql);
					if ($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        if ($min=="" && $max=="" && $sap_xep!="" && $hang_sx!="" ) {

        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx order by gia :sap_xep limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':hang_sx',$hang_sx,PDO::PARAM_STR);
				$stmt->bindPaRam(':sap_xep',$sap_xep,PDO::PARAM_STR);
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
        if ($hang_sx=="" && $sap_xep==""  && $min!="" && $max!="" ) {
        	$sql ="SELECT *  FROM  {$table} where gia>=:min and gia<=:max order by gia  limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':min',$min,PDO::PARAM_INT);
				$stmt->bindPaRam(':max',$max,PDO::PARAM_INT);
				$stmt->bindPaRam(':start',$start,PDO::PARAM_INT);
				$stmt->bindPaRam(':limmit',$limit,PDO::PARAM_INT);
				if ($stmt->execute()) 
				{
					//die($sql);
					if($stmt->rowCount()>0) {
						$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
					}
				}
				$stmt->closeCursor();
			}
        }
        if ($hang_sx=="" && $min=="" && $max==""  && $sap_xep!="" ) {
        	$sql ="SELECT *  FROM  {$table} order by gia :sap_xep limit :start,:limmit";
        	$stmt = $this->db->prepare($sql);
			if ($stmt) {
				$stmt->bindPaRam(':sap_xep',$sap_xep,PDO::PARAM_STR);
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
        if ($sap_xep=="" && $min=="" && $max=="" && $hang_sx!="") {
        	$sql ="SELECT *  FROM  {$table}  as a inner join hang_sx as b where a.id_sx=b.id and b.name =:hang_sx  order by gia limit :start,:limmit";
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
        }
        if ($hang_sx=="" && $sap_xep=="" && $min=="" && $max=="" ) {
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
				$stmt->bindPaRam(':hang_sx',$hang_sx,PDO::PARAM_STR);
				$stmt->bindPaRam(':sap_xep',$sap_xep,PDO::PARAM_STR);
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