<?php
namespace App\config;
use \PDO;
class Database{
	protected $db;
	function __construct()
	{
		$this->connection();
	}
	function __destruct()
	{
		$this->disconnection();
	}
	protected function connection()
	{
          $this->db =new PDO("mysql:host=localhost;dbname=phone;charset=utf8","root","");     
          return $this->db; 
	}
	protected function disconnection()
	{
         $this->db=null;
	}
}
?>