<?php
namespace App\Model;
require 'app/libs/PDODriver.php';
use App\libs\PDODriver;
use \PDO;

class Product_model extends PDODriver
{
	function __construct(){
		parent::__construct();
	}
	public function getAllDataPhoneByKeyword($keyword='')
	{
		$data=[];
		$key="%".$keyword."%";
		$sql="SELECT a.* FROM phone AS a where a.phone_name like :keyword order by create_time desc ";
		$stmt=$this->db->prepare($sql);
		if($stmt)
		{
			$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
			if($stmt->execute())
			{
				if($stmt->rowCount()>0)
				{
					$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
    return $data;
	}
	public function getAllDataLaptopByKeyword($keyword='')
	{
		$data=[];
		$key="%".$keyword."%";
		$sql="SELECT a.* FROM laptop AS a where a.laptop_name like :keyword order by create_time desc ";
		$stmt=$this->db->prepare($sql);
		if($stmt)
		{
			$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
			if($stmt->execute())
			{
				if($stmt->rowCount()>0)
				{
					$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
    return $data;
	}
    public function getAllDataById($table,$id)
	{
		$data=[];
		$sql ="SELECT a.*,b.name,c.ten_loai FROM {$table} AS a inner join hang_sx AS b on a.id_sx=b.id inner join loai_sp as c on a.id_loai_sp=c.id where a.id=:id limit 1";
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
	public function updateData($data,$table,$nameId)
    {
    return $this->update($table, $data, $nameId);
    }
	public function getAllDataHang_sx($table)
	{
		return $this->getAllData($table);
	}
	public function getAllDataLoai_sp($table)
	{
		return $this->getAllData($table);
	}
	public function getAllDataPhone($table)
	{
		return $this->getAllData($table);
	}
	public function addDataProduct($data,$table)
	{
		return $this->insert($table,$data);
	}
	public function getDataProductByPage($keyword='',$start,$limit)
	{
		$data=[];
		$key="%".$keyword."%";
		$sql="SELECT a.*,b.name FROM phone AS a inner join hang_sx as b where a.phone_name like :keyword and a.id_sx=b.id order by create_time desc limit :start,:limmit ";
		$stmt=$this->db->prepare($sql);
		if($stmt)
		{
			$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
			$stmt->bindParam(':start',$start,PDO::PARAM_INT);
			$stmt->bindParam(':limmit',$limit,PDO::PARAM_INT);
			if($stmt->execute())
			{
				if($stmt->rowCount()>0)
				{
					$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}

    return $data;
	}
	public function getDataLaptopByPage($keyword='',$start,$limit)
	{
		$data=[];
		$key="%".$keyword."%";
		$sql="SELECT a.*,b.name FROM laptop AS a inner join hang_sx as b where a.laptop_name like :keyword and a.id_sx=b.id order by create_time desc limit :start,:limmit ";
		$stmt=$this->db->prepare($sql);
		if($stmt)
		{
			$stmt->bindParam(':keyword',$key,PDO::PARAM_STR);
			$stmt->bindParam(':start',$start,PDO::PARAM_INT);
			$stmt->bindParam(':limmit',$limit,PDO::PARAM_INT);
			if($stmt->execute())
			{
				if($stmt->rowCount()>0)
				{
					$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}

    return $data;
	}
	public function getAllDataOrderCustomers()
	{
		$orders=[];
		$sql="SELECT a.*,b.phone_name,b.images,c.laptop_name,c.images FROM orders as a inner join phone AS b on a.product_name = b.phone_name or a.product_name=c.laptop_name 
		where a.status=0  ";
		$stmt=$this->db->prepare($sql);
        if($stmt)
        {
        	if($stmt->execute())
        	{
        		if($stmt->rowCount()>0)
        		{
        			$orders=$stmt->fetchAll(PDO::FETCH_ASSOC);
        		}
        	}
        	$stmt->closeCursor();
        } 
        //gom nhom nhung ng mua chung 1 quyen sach vs nhau
        $data=[];
        // foreach($orders as $key => $val)
        // {
        // 	$data[$val['book_id']]['id_book']=$val['book_id'];
        // 	$data[$val['book_id']]['name_book']=$val['name_book'];
        // 	$data[$val['book_id']]['images']=$val['images'];
        // 	$data[$val['book_id']]['lstCustomer'][]=$val;
        // }
        $orders =null;
        return $data;
	}
	public function updateStatusOrder($table,$data,$id)
	{
		return $this->update($table,$data,$id);
	}
	public function xoasanpham($table,$id)
	{
    $sql = "DELETE FROM {$table} WHERE id = :id";
    // echo $idTG;
    // die();
    $stmt = $this->db->prepare($sql);
    if ($stmt) 
    {
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);
    /// tu kiem tra xem delete co ton tai id hay khong
    if ($stmt->execute()) 
    {  
    return TRUE;
    }
     $stmt->closeCursor();
    }
    return FALSE;
    }

}