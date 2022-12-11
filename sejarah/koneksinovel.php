<?php 
 
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "novel";
 
	function __construct(){
		mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->db);
	}
 
	function tampil_data(){
		$data = mysqli_query("select * from list");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
}