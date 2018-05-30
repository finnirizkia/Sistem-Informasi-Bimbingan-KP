<?php 
class Mahasiswa extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['npm']=="" || $data['nama']=="" || $data['kelas']=="" || $data['jurusan']=="" || $data['angkatan']=="" || $data['password']=="")
			return 0;
		$data['password'] = md5($data['password']);

		$str = $this->db->insert_string('mahasiswa', $data);
		$query = $this->db->query($str);
		return $query;
	}

	function get_all(){
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}
	function get($npm){
		$query = $this->db->get_where('mahasiswa', array('npm' => $npm));
		return $query->result();
	}
	function update($data){
			if($data['npm']=="" || $data['nama']=="" || $data['kelas']=="" || $data['jurusan']=="" || $data['angkatan']=="")
			return 0;
		if($data['password']=="")
			unset($data['password']);
		$query = $this->db->update('mahasiswa', $data, array('npm' => $data['npm']));
		return $query;
	}
	function delete($npm){
		$query = $this->db->delete('mahasiswa', array('npm' => $npm));
		return $query;
	}

} ?>