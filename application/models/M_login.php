<?php
class M_login extends CI_Model {
	function cek_login($data){
		$query = $this->db->get_where('user', $data);
		return $query;
	}
}
?>