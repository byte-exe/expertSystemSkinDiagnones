<?php

error_reporting(0);

class Home {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_skripsi_risky";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	function tampil_kode_HP () {
		$data = mysqli_query($this->con, "SELECT substr((max(ID_HP)), 3, 3) as maxKode FROM pengobatan");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['maxKode'];
			$hasil = $hasil + 1;
			
			if ($hasil < 10){
				$char = "HP00". $hasil;
			}
			else{
				$char = "HP0". $hasil;
			}
		}
		return $char;
	}
	
	function tampilHP () {
		$data = mysqli_query($this->con, "SELECT * FROM pengobatan");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input ($ID_HP, $ketHP) {
		mysqli_query($this->con, "INSERT INTO pengobatan(ID_HP, ketHP)VALUES('$ID_HP','$ketHP')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM pengobatan WHERE ID_HP = '$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM pengobatan WHERE ID_HP ='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_HP, $ketHP) {
		mysqli_query ($this->con, "UPDATE pengobatan SET  ketHP = '$ketHP' where ID_HP = '$ID_HP'");
	}
}
?>