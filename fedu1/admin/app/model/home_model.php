<?php
namespace App\Model;
require 'app/libs/PDODriver.php';
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
		$sql ="SELECT a.*,b.name FROM phone AS a inner join Hang_sx AS b on a.id_sx=b.id  where a.id=:id limit 1";
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
	public function getAllDataLaptop()
	{
		$data=[];
		$sql ="SELECT a.*,b.name FROM laptop AS a inner join Hang_sx AS b on a.id_sx=b.id  order by a.create_time";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;

	}

	public function getAllDataPhone()
	{
		$data=[];
		$sql ="SELECT a.*,b.name FROM phone AS a inner join Hang_sx AS b on a.id_sx=b.id  order by a.create_time";
		$stmt = $this->db->prepare($sql);
		if ($stmt) {
			if ($stmt->execute()) {
				if ($stmt->rowCount()>0) {
					$data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;

	}
	public function insertOrderCustomer($table,$data)
	{
        return $this->insert($table,$data);
	}
	
}
?>