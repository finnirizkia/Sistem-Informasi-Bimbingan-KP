<?php 
class Dosen extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insert($data){
		if($data['nidn']=="" || $data['nama']=="" || $data['password']=="")
			return 0;
		$data['password'] = md5($data['password']);

		$str = $this->db->insert_string('dosen', $data);
		$query = $this->db->query($str);
		return $query;
	}
	function get_all(){
		$query = $this->db->get('dosen');
		return $query->result();
	}
	function get($nidn){
		$query = $this->db->get_where('dosen', array('nidn' => $nidn));
		return $query->result();
	}
	function update($data){
		if($data['nidn']=="" || $data['nama']=="")
			return 0;
		if($data['password']=="")
			unset($data['password']);
		$query = $this->db->update('dosen', $data, array('nidn' => $data['nidn']));
		return $query;
	}
	function delete($nidn){
		$query = $this->db->delete('dosen', array('nidn' => $nidn));
		return $query;
	}

} ?>