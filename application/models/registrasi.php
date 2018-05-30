<?php 
class Registrasi extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['npm']=="" || $data['kd_kelas']=="")
			return 0;
		$str = $this->db->insert_string('registrasi', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('registrasi');
		return $query->result();
	}
	function get($kd_kelas){
		$query = $this->db->get_where('registrasi', array('kd_registrasi' => $kd_registrasi));
		return $query->result();
	}
	function getByNpm($npm){
		$query = $this->db->get_where('registrasi', array('npm' => $npm));
		return $query->result();
	}
	function update($data){
		if($data['kd_registrasi']=="" || $data['kapasitas']=="" ||  $data['nidn']=="")
			return 0;
		$query = $this->db->update('registrasi', $data, array('kd_registrasi' => $data['kd_registrasi']));
		return $query;
	}
	function delete($kd_registrasi){
		$query = $this->db->delete('registrasi', array('kd_registrasi' => $kd_registrasi));
		return $query;
	}

} ?>