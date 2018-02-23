<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function GetData($data) {
        $query = $this->db->get_where('user', $data);
        return $query;
    }
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_rute(){
		return $this->db->get('rute');
	}
	function tampilrute($where=" "){
		$data = $this->db->query('select * from rute ' .$where);
		return $data;
	}
	function tampil_pencarian($rute_from, $rute_to){
		$query = $this->db->query("select * from rute where rute_from ='$ruteFrom' AND rute_to ='$ruteTo'");
		return $query;
	}
}