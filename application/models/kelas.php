<?php 
class Kelas extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['kd_kelas']=="" || $data['kapasitas']=="" ||  $data['nidn']=="")
			return 0;
		$str = $this->db->insert_string('kelas', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('kelas');
		return $query->result();
	}
	function get($kd_kelas){
		$query = $this->db->get_where('kelas', array('kd_kelas' => $kd_kelas));
		return $query->result();
	}
	function getByNpm($npm){
		$query = $this->db->query("SELECT * FROM kelas WHERE kd_kelas NOT IN (SELECT kd_kelas FROM kelas NATURAL JOIN registrasi WHERE npm='".$npm."')");
		return $query->result();
	}
	function update($data){
		if($data['kd_kelas']=="" || $data['kapasitas']=="" || $data['nidn']=="")
			return 0;
		$query = $this->db->update('kelas', $data, array('kd_kelas' => $data['kd_kelas']));
		return $query;
	}
	function delete($kd_kelas){
		$query = $this->db->delete('kelas', array('kd_kelas' => $kd_kelas));
		return $query;
	}

} ?>