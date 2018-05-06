<?php
namespace App\libs;
require_once 'application/config/database.php';
use App\config\Database;
use \PDO;

class PDODriver extends Database//phao ke thua vi database co ham ket noi csdl
{
	private $data =array();
    public function __construct()
	   {
	   	parent::__construct();
	   }

	   private function getPrimaryKey($table)
	   {
        $mydata = [];
        $sql = "SHOW KEYS FROM {$table} WHERE Key_name = 'PRIMARY'";
        $stmt = $this->db->prepare($sql);
        if($stmt)
        {
            if($stmt->execute())
            {
                if($stmt->rowCount() > 0){
                    $mydata = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
            $stmt->closeCursor();
        }
        return $mydata['Column_name'] ?? '';
	   }
   //thuc hanh lay tat ca du lieu cua cac bang khac nhau
    public function getAllData($table)
	   {
	      $sql ="SELECT * FROM {$table}";//hoac co the viet 'SELECT * FROM'.$table;
	      $stmt=$this->db->prepare($sql);
	      if($stmt)
		      {
            if($stmt->execute())
		      	{
		      	if($stmt->rowCount()>0)
			      	{

			           $this->data=$stmt->fetchAll(PDO::FETCH_ASSOC);
			        }
			      }
			        $stmt->closeCursor();
		      }

	      return $this->data;
	  }
  	public function findDatabyId($table,$id)
  	{

  		$nameid=$this->getPrimaryKey($table);
  		$sql="SELECT * FROM {$table} WHERE {$id}=:id";
  		$stmt=$this->db->prepare($sql);
  		if($stmt)
  		{
  			$stmt->bindParam(':id',$id,PDO::PARAM_INT);
  			if($stmt->execute())
  			{
  				if($stmt->rowCount()>0)
  				{
  					$this->data=$stmt->fetch(PDO::FETCH_ASSOC);
  				}
  			}
  			$stmt->closeCursor();

  		}
  		return $this->data;
  	}

  	public function insert($table, $data = []){
        $filedTable = '';
        $filedParam = '';
        foreach ($data as $key => $val) 
        {
            $filedTable .= ($filedTable == '') ? $key : ',' . $key;
            $filedParam .= ($filedParam == '') ? ":{$key}" : ", :{$key}";
        }
        $sql = "INSERT INTO {$table}({$filedTable}) VALUES({$filedParam})";
        $stmt = $this->db->prepare($sql);
        if($stmt)
        {
            foreach ($data as $k => &$v) 
            {
                $stmt->bindParam(":{$k}",$v, PDO::PARAM_STR);
            }
            if($stmt->execute())
            {
                return TRUE;
            }
            $stmt->closeCursor();
        }
       return FALSE;

    }   
	public function update($table,$data,$id)
  {
	 $primaryKey = $this->getPrimaryKey($table);
        $fieldData = '';
        foreach ($data as $key => $val) 
        {
            $fieldData .= ($fieldData == '') ? "{$key} = :{$key}" : ", {$key} = :{$key}";
        }
        // echo "<pre>";
        // print_r($primaryKey);
        // die();
        $sql = "UPDATE {$table} SET {$fieldData} WHERE {$primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        if($stmt)
        {
            foreach ($data as $k => &$v) 
            {
                $stmt->bindParam(":{$k}",$v, PDO::PARAM_STR);
            }
            $stmt->bindParam(":id",$id, PDO::PARAM_INT);
            // kiem tra co ton tai id hay ko?
            if(!empty($this->findDatabyId($table, $id)))
            {
                if($stmt->execute())
                {
                    return TRUE;
                }
            }
            $stmt->closeCursor();
        }
        return FALSE;
  }
	public function delete($table,$id)
	{
		$primaryKey=$this->getPrimaryKey($table);
		$sql = "DELETE FROM {$table} WHERE {$primaryKey} =:id ";
		$stmt = $this->db->prepare($sql);
		if($stmt)
        {
        	$stmt->bindParam(":id",$id,PDO::PARAM_INT);
        	// if(!empty($this->findDatabyId($table,$id)))//kiem tra co ton tai id hay ko
        	{
	        	if($stmt->execute())
	        	{
	                return true;
	        	}
            }
        	$stmt->closeCursor();   
        }
         return false;
	}
}  

?>