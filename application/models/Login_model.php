<?php
class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function verify($data){
		if($data['username']=="" || $data['password']=="")
			return 0;
		$username = $data['username'];
		$password = md5($data['password']);

		$query = $this->db->query("SELECT username from admin where username='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "admin","result"=> $query->result());

		$query = $this->db->query("SELECT nidn from dosen where nidn='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "dosen","result"=> $query->result());

		$query = $this->db->query("SELECT npm from mahasiswa where npm='".$username."' and password='".$password."'");
		if(count($query->result()))
			return array("type" => "mahasiswa","result"=> $query->result());
	}
		

}
