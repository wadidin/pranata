<?php 
defined('BASEPATH') OR exit('No direct script access allowed ');


class Visitor_Model extends CI_Model {

	function GetVisitor($where = ""){
		return $this->db->query("select * from visitor $where");		
	}
	
	public function InsertData($table,$data){
		return $this->db->insert($table,$data);
	}
	
	public function UpdateData($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}
	
	public function DeleteData($table,$where){
		return $this->db->delete($table,$where);
	}
}
?>