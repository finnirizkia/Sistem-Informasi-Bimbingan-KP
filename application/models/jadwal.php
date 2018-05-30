<?php 
class Jadwal extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['nama_hari']=="" || $data['waktu_mulai']=="" || $data['waktu_akhir']=="" || $data['kd_kelas']=="")
			return 0;
		$str = $this->db->insert_string('jadwal', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('jadwal');
		return $query->result();
	}
	function get($kd_jadwal){
		$query = $this->db->get_where('jadwal', array('kd_jadwal' => $kd_jadwal));
		return $query->result();
	}
	function getByNIDN($nidn){
		$query = $this->db->query("SELECT kd_jadwal, nama_hari, waktu_mulai, waktu_akhir, kd_kelas FROM kelas NATURAL JOIN jadwal WHERE nidn='".$nidn."'");
		return $query->result();
	}
	function getByNpm($npm){
		$query = $this->db->query("SELECT kd_jadwal, nama_hari, waktu_mulai, waktu_akhir, kd_kelas FROM registrasi NATURAL JOIN kelas NATURAL JOIN jadwal WHERE npm = '".$npm."'");
		return $query->result();
	}
	function update($data){
		if($data['kd_jadwal']=="" || $data['nama_hari']=="" || $data['waktu_mulai']=="" || $data['waktu_akhir']=="" || $data['kd_kelas']=="")
			return 0;
		$query = $this->db->update('jadwal', $data, array('kd_jadwal' => $data['kd_jadwal']));
		return $query;
	}
	function delete($kd_jadwal){
		$query = $this->db->delete('jadwal', array('kd_jadwal' => $kd_jadwal));
		return $query;
	}

} ?>